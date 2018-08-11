<div class="card main">

  @isset($post)
  <div class="card-body">
 
    <!-- POST CONTENT -->
    <div><img src="{{ asset('img/user.png') }}" alt="user" class="avatar"></div>

    <div class="meta text-muted">
      <span class="mr-2">{{ isset($post->post_date) ? $post->post_date : '' }}</span> 
      <i class="far fa-eye"></i>{{ isset($post->countView) ? $post->countView : '' }}
    </div>

    <div class="card-text wrap"> <?php echo isset($post->post_content) ? $post->post_content : ''; ?></div>

    @if( isset($post->post_image) )
      <div class="card-img-bottom wrap">
        <img src="{{ route('filePathInView', ['filename' => $post->post_image] ) }}" class="img-fluid">
      </div>
    @endif

    <div class="social main">
      <a href="#"><i class="far fa-thumbs-up"></i>11 Thích</a>
      <a href="#"><i class="far fa-comment"></i>{{ isset($post->countComment) ? $post->countComment : ' ' }} Bình luận</a>
      <a href="#"><i class="fas fa-share"></i>7 Chia sẻ</a>
    </div>
    <!-- /POST CONTENT -->

    <!-- COMMENT -->
    <div>
    
    @guest
        <hr>
        <div class="alert alert-warning" role="alert">
            <p class="text-danger">Vui lòng đăng nhập để bình luận !</p>
        </div>
    @endguest
    @auth
      <form id="comment" action="{{url('comment/store')}}" class="form-group row" method="POST">
        @csrf
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10"> 
          <input type="hidden" name="post_id" value="{{ isset($post->post_id) ? $post->post_id : ' '}}">
          <input name="comment" placeholder="Viết bình luận ..." id="comment-input" class="form-control w-100" required=""></input>  
        </div>

        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
          <button type="submit" class="btn btn-info float-right" name="submit" id="comment-btn">Đăng</button>  
        </div>
      </form>
    @endauth
      
      @isset($cmts)
      <!-- LIST COMMENTs -->
      <div class="comments infinite-scroll">

        @foreach ($cmts as $cmt)
        <div class="row" style="margin-bottom: 5px;">
          <div class="col-1" style="padding-top: 4px;">
            <img src="{{ route('avatarPath', ['filename' => $cmt->avatar] ) }}" alt="" class="avatar">
          </div>   

          <div class="col-11">
            <div class="comment-content">
              <span class="name">{{isset($cmt->user_name) ? $cmt->user_name : ''}} </span>
              {{isset($cmt->cmt_content) ? $cmt->cmt_content : '' }}
            </div>
          </div>

        </div>
        @endforeach 
        {{ $cmts->links() }}

      </div>
      @endisset

    </div>
    <!-- /COMMENT -->
  </div>
  @endisset
</div>

@push('js-code')
$(document).ready(function() {
    $("#post-input").emojioneArea({
          pickerPosition: "left",
          tonesStyle: "bullet"
    });
  });

  // ẩn thanh phân trang của laravel
  $('ul.pagination').hide();
  $(function() {
      $('.infinite-scroll').jscroll({
          autoTrigger: true,
          loadingHtml: '<div class="text-center"><img class="center-block" src="{{asset('img/loading.gif')}}" alt="Loading..." /></div>',
          padding: 0,
          nextSelector: '.pagination li.active + li a',
          contentSelector: 'div.infinite-scroll',
          callback: function() {
              // xóa thanh phân trang ra khỏi html mỗi khi load xong nội dung
              $('ul.pagination').remove();
          }
      });
  });
@endpush

@push('css-file')
  <link rel="stylesheet" href="{{ asset('js/emojione/dist/emojionearea.min.css') }}">
@endpush

@push('js-file')
  <script src="{{ asset('js/emojione/dist/emojionearea.min.js') }}"></script>
@endpush