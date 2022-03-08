<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyNewsLetterRequest;
use App\Http\Requests\StoreNewsLetterRequest;
use App\Http\Requests\UpdateNewsLetterRequest;
use App\Models\NewsLetter;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class NewsLetterController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('news_letter_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $newsLetters = NewsLetter::with(['media'])->get();

        return view('admin.newsLetters.index', compact('newsLetters'));
    }

    public function create()
    {
        abort_if(Gate::denies('news_letter_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.newsLetters.create');
    }

    public function store(StoreNewsLetterRequest $request)
    {
        $newsLetter = NewsLetter::create($request->all());

        foreach ($request->input('picture', []) as $file) {
            $newsLetter->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('picture');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $newsLetter->id]);
        }

        return redirect()->route('admin.news-letters.index');
    }

    public function edit(NewsLetter $newsLetter)
    {
        abort_if(Gate::denies('news_letter_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.newsLetters.edit', compact('newsLetter'));
    }

    public function update(UpdateNewsLetterRequest $request, NewsLetter $newsLetter)
    {
        $newsLetter->update($request->all());

        if (count($newsLetter->picture) > 0) {
            foreach ($newsLetter->picture as $media) {
                if (!in_array($media->file_name, $request->input('picture', []))) {
                    $media->delete();
                }
            }
        }
        $media = $newsLetter->picture->pluck('file_name')->toArray();
        foreach ($request->input('picture', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $newsLetter->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('picture');
            }
        }

        return redirect()->route('admin.news-letters.index');
    }

    public function show(NewsLetter $newsLetter)
    {
        abort_if(Gate::denies('news_letter_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.newsLetters.show', compact('newsLetter'));
    }

    public function destroy(NewsLetter $newsLetter)
    {
        abort_if(Gate::denies('news_letter_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $newsLetter->delete();

        return back();
    }

    public function massDestroy(MassDestroyNewsLetterRequest $request)
    {
        NewsLetter::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('news_letter_create') && Gate::denies('news_letter_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new NewsLetter();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
