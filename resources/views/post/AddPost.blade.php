<!-- ADD POST -->
<div class="card main">
  
  @if ($errors->any())
  <div class="alert alert-danger" role="alert">

    <strong>Lỗi !</strong> 
    @foreach ($errors->all() as $error)
     <li>{{ $error }}</li>
    @endforeach

  </div>
  @endif

  <div class="card-header" style="border-top-right-radius: 15px; border-top-left-radius: 15px;"><h6><i class="fas fa-pencil-alt"></i> Đăng bài</h6></div>

  <div class="card-body">
    <form action="{{url('post/store')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <textarea cols="30" id="post-input" class="form-control wrap" name="content" required>{{ old('content') }} </textarea>

      <button  type='button' class="btn btn-sm btn-file" style="border-radius: 20px;">
        <label for="imgInp"><i class="far fa-image"></i> Đăng ảnh</label>
      </button>
         
      <input type="file" name="image" id="imgInp" style="width: 0px; height: 0px; visibility: hidden;">
      <button class="btn btn-primary float-right btn-sm" type="submit" name="submit">Đăng</button>
    </form>
    <img id="imgPreview">
  </div>

</div> 

@push('js-code')
  $(document).ready(function() {
    $("#post-input").emojioneArea({
          pickerPosition: "left",
          tonesStyle: "bullet"
    });
  });
  function readURL(input) {

    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        $('#imgPreview').attr('src', e.target.result);
        $('#imgPreview').attr('class', 'img-preview');
      }

      reader.readAsDataURL(input.files[0]);
    }
  }

  $("#imgInp").change(function() {
    readURL(this);
  });
@endpush

@push('css-file')
  <link rel="stylesheet" href="{{ asset('js/emojione/dist/emojionearea.min.css') }}">
@endpush

@push('js-file')
  <script src="{{ asset('js/emojione/dist/emojionearea.min.js') }}"></script>
@endpush

<!-- /ADD POST -->