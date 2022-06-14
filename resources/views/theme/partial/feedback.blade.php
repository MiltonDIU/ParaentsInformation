@if(Auth::check())
<link rel="stylesheet" href=" {{ url('assets/theme/css/feedback.css')}}">
<button class="open-button" onclick="openForm()">Feedback</button>
<div class="chat-popup" id="myForm">
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <form method="POST"   action="{{  route("admin.feedbacks.store") }}" class="form-container">
        @csrf

        <h1>Feedback</h1>
        <select class="form-control select2 {{ $errors->has('feedback_category') ? 'is-invalid' : '' }}" name="feedback_category_id" id="feedback_category_id" required>
            @foreach(  \App\Models\Feedback::feedbackCategories() as $id => $entry)
                <option value="{{ $id }}" {{ old('feedback_category_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
            @endforeach
        </select>
        @if($errors->has('feedback_category'))
            <div class="invalid-feedback">
                {{ $errors->first('feedback_category') }}
            </div>
        @endif

        <textarea placeholder="Type your feedback.." name="content" required></textarea>
        <button type="submit" class="btn">Send</button>
        <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
    </form>
</div>


@push('script')
    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>
@endpush
@endif
