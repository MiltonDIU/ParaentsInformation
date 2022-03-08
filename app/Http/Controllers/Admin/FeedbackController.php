<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyFeedbackRequest;
use App\Http\Requests\StoreFeedbackRequest;
use App\Http\Requests\UpdateFeedbackRequest;
use App\Models\Feedback;
use App\Models\FeedbackCategory;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;
use Auth;
class FeedbackController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('feedback_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Feedback::with(['feedback_category', 'user'])->select(sprintf('%s.*', (new Feedback())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'feedback_show';
                $editGate = 'feedback_edit';
                $deleteGate = 'feedback_delete';
                $crudRoutePart = 'feedbacks';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->addColumn('feedback_category_title', function ($row) {
                return $row->feedback_category ? $row->feedback_category->title : '';
            });

            $table->editColumn('content', function ($row) {
                return $row->content ? $row->content : '';
            });
            $table->addColumn('user_name', function ($row) {
                return $row->user ? $row->user->name : '';
            });

            $table->editColumn('user.email', function ($row) {
                return $row->user ? (is_string($row->user) ? $row->user : $row->user->email) : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'feedback_category', 'user']);

            return $table->make(true);
        }

        return view('admin.feedbacks.index');
    }

    public function create()
    {
        abort_if(Gate::denies('feedback_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $feedback_categories = FeedbackCategory::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');
        return view('admin.feedbacks.create', compact('feedback_categories'));
    }

    public function store(StoreFeedbackRequest $request)
    {
        $data = $request->all();
        $data['user_id'] =Auth::id();
        $feedback = Feedback::create($data);

        return redirect()->route('admin.feedbacks.index');
    }

    public function edit(Feedback $feedback)
    {
        abort_if(Gate::denies('feedback_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $feedback_categories = FeedbackCategory::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $feedback->load('feedback_category', 'user');

        return view('admin.feedbacks.edit', compact('feedback', 'feedback_categories'));
    }

    public function update(UpdateFeedbackRequest $request, Feedback $feedback)
    {
        $data = $request->all();
        $data['user_id'] =Auth::id();
        $feedback->update($data);
        return redirect()->route('admin.feedbacks.index');
    }

    public function show(Feedback $feedback)
    {
        abort_if(Gate::denies('feedback_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $feedback->load('feedback_category', 'user');

        return view('admin.feedbacks.show', compact('feedback'));
    }

    public function destroy(Feedback $feedback)
    {
        abort_if(Gate::denies('feedback_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $feedback->delete();

        return back();
    }

    public function massDestroy(MassDestroyFeedbackRequest $request)
    {
        Feedback::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
