<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyLinkCategoryRequest;
use App\Http\Requests\StoreLinkCategoryRequest;
use App\Http\Requests\UpdateLinkCategoryRequest;
use App\Models\Link;
use App\Models\LinkCategory;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class LinkCategoryController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('link_category_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $linkCategories = LinkCategory::with(['media'])->get();

        return view('admin.linkCategories.index', compact('linkCategories'));
    }

    public function create()
    {
        abort_if(Gate::denies('link_category_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $links = Link::pluck('title', 'id');
        return view('admin.linkCategories.create',compact('links'));
    }

    public function store(StoreLinkCategoryRequest $request)
    {

        $linkCategory = LinkCategory::create($request->all());
        $linkCategory->linkCategoryLinks()->sync($request->input('link', []));
        if ($request->input('picture', false)) {
            $linkCategory->addMedia(storage_path('tmp/uploads/' . basename($request->input('picture'))))->toMediaCollection('picture');
        }
        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $linkCategory->id]);
        }
        return redirect()->route('admin.link-categories.index');
    }

    public function edit(LinkCategory $linkCategory)
    {
        abort_if(Gate::denies('link_category_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $links = Link::pluck('title', 'id');

        $linkCategory->load('linkCategoryLinks');
        return view('admin.linkCategories.edit', compact('linkCategory','links'));
    }

    public function update(UpdateLinkCategoryRequest $request, LinkCategory $linkCategory)
    {

        $linkCategory->update($request->all());
        $linkCategory->linkCategoryLinks()->sync($request->input('links', []));
        if ($request->input('picture', false)) {
            if (!$linkCategory->picture || $request->input('picture') !== $linkCategory->picture->file_name) {
                if ($linkCategory->picture) {
                    $linkCategory->picture->delete();
                }
                $linkCategory->addMedia(storage_path('tmp/uploads/' . basename($request->input('picture'))))->toMediaCollection('picture');
            }
        } elseif ($linkCategory->picture) {
            $linkCategory->picture->delete();
        }

        return redirect()->route('admin.link-categories.index');
    }

    public function show(LinkCategory $linkCategory)
    {
        abort_if(Gate::denies('link_category_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $linkCategory->load('linkCategoryLinks');

        return view('admin.linkCategories.show', compact('linkCategory'));
    }

    public function destroy(LinkCategory $linkCategory)
    {
        abort_if(Gate::denies('link_category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $linkCategory->delete();

        return back();
    }

    public function massDestroy(MassDestroyLinkCategoryRequest $request)
    {
        LinkCategory::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('link_category_create') && Gate::denies('link_category_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new LinkCategory();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
