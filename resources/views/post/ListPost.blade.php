
@isset($posts)
<div class="infinite-scroll">
  @foreach ($posts as $post)
  <div class="card main">

    <div class="card-body">
        <div><img src="{{ asset('img/user.png') }}" alt="user" class="avatar"></div>
        
    		<div class="meta text-muted">
          <span class="mr-2">{{ isset($post->post_date) ? $post->post_date : '' }}</span>
          <i class="far fa-eye"></i>{{ isset($post->countView) ? $post->countView : '' }}
        </div>

  	    <div class="card-text wrap">
  			  <?php echo isset($post->post_content) ? $post->post_content : " "; ?>
  	    </div>
        
        @if( isset($post->post_image) )
          <div class="card-img-bottom wrap">
              <img src="{{ route('filePathInView', ['filename' => $post->post_image] ) }}" class="img-fluid">
          </div>
        @endif
        
  	    <div class="social">
  	  		<a href="#"><i class="far fa-thumbs-up"></i>11 Thích</a>
  	  		<a href="{{url('post/').'/' }}{{isset($post->post_id) ? $post->post_id : ''}}#comment"><i class="far fa-comment"></i>{{ isset($post->countComment) ? $post->countComment : ' ' }} Bình luận</a>
  	  		<a href="{{url('post/').'/' }}{{isset($post->post_id) ? $post->post_id : ''}}"><i class="far fa-hand-point-right"></i> Xem</a>
  	  	</div>
    </div>

  </div>
  @endforeach
  {{ $posts->links() }}
</div> 
@endisset

@push('js-file')
  <script src="{{ asset('js/jscroll/dist/jquery.jscroll.min.js') }}"></script>
@endpush

@push('js-code')
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


