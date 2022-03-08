@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.show') }} {{ trans('cruds.feedbackCategory.title') }}
        </div>

        <div class="card-body">
            <div class="form-group">
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('admin.feedback-categories.index') }}">
                        {{ trans('global.back_to_list') }}
                    </a>
                </div>
                <table class="table table-bordered table-striped">
                    <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.feedbackCategory.fields.id') }}
                        </th>
                        <td>
                            {{ $feedbackCategory->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.feedbackCategory.fields.title') }}
                        </th>
                        <td>
                            {{ $feedbackCategory->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.feedbackCategory.fields.slug') }}
                        </th>
                        <td>
                            {{ $feedbackCategory->slug }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.feedbackCategory.fields.is_active') }}
                        </th>
                        <td>
                            {{ App\Models\FeedbackCategory::IS_ACTIVE_RADIO[$feedbackCategory->is_active] ?? '' }}
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('admin.feedback-categories.index') }}">
                        {{ trans('global.back_to_list') }}
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            {{ trans('global.relatedData') }}
        </div>
        <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
            <li class="nav-item">
                <a class="nav-link" href="#feedback_category_qa_topics" role="tab" data-toggle="tab">
                    {{ trans('cruds.qaTopic.title') }}
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane" role="tabpanel" id="feedback_category_qa_topics">
                @includeIf('admin.feedbackCategories.relationships.feedbackCategoryQaTopics', ['qaTopics' => $feedbackCategory->feedbackCategoryQaTopics])
            </div>
        </div>
    </div>

@endsection
