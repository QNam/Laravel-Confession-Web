
<!-- TOP POST -->
<div class="card main">

  <div class="card-body">
    <!-- TAB -->
    <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" href="#topView" role="tab" data-toggle="tab">Top Lượt Xem</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#topCmt" role="tab" data-toggle="tab">Top Bình Luận</a>
      </li>
    </ul>
    <!-- /TAB -->
    
    <!-- PANELS -->
    <div class="tab-content">
      @isset($topView)
      <!-- TOP VIEW PANEL -->
      <div role="tabpanel" class="tab-pane active" id="topView">
        @foreach($topView as $post)

          <div class="wrap">
            <div><img src="{{ asset('img/user.png') }}" alt="user" class="avatar"></div>
            <div class="card-text wrap">  
              <?php echo isset($post->post_content) ? $post->post_content : " "; ?>
            </div>

            <div class="meta text-muted">
              <span class="mr-2">{{ isset($post->post_date) ? $post->post_date : '' }}</span>
              <i class="far fa-eye"></i>{{ isset($post->countView) ? $post->countView : '' }}

              <div class="social">
                <a href="#"><i class="far fa-thumbs-up"></i>11 Thích</a>
                <a href="{{url('post/').'/' }}{{isset($post->post_id) ? $post->post_id : ''}}#comment"><i class="far fa-comment"></i>{{ isset($post->countComment) ? $post->countComment : ' ' }} Bình luận</a>
                <a href="{{url('post/').'/' }}{{isset($post->post_id) ? $post->post_id : ''}}"><i class="far fa-hand-point-right"></i> Xem</a>
              </div>
            </div>
            <hr>

          </div>

        @endforeach   
      </div>
      @endisset
      <!-- /TOP VIEW PANEL -->
      
      @isset($topCmt)
      <!-- TOP CMT PANEL -->
      <div role="tabpanel" class="tab-pane fade" id="topCmt">
        
        @foreach($topCmt as $post)
          <div class="wrap">
            <div><img src="{{ asset('img/user.png') }}" alt="user" class="avatar"></div>

            <div class="card-text wrap">
              <?php echo isset($post->post_content) ? $post->post_content : " "; ?>
            </div>

            <div class="meta text-muted">
              <span class="mr-2">{{ isset($post->post_date) ? $post->post_date : '' }}</span>
              <i class="far fa-eye"></i>{{ isset($post->countView) ? $post->countView : '' }}

              <div class="social">
                <a href="#"><i class="far fa-thumbs-up"></i>11 Thích</a>
                <a href="{{url('post/').'/' }}{{isset($post->post_id) ? $post->post_id : ''}}#comment"><i class="far fa-comment"></i>{{ isset($post->countComment) ? $post->countComment : ' ' }} Bình luận</a>
                <a href="{{url('post/').'/' }}{{isset($post->post_id) ? $post->post_id : ''}}"><i class="far fa-hand-point-right"></i> Xem</a>
              </div>
            </div>
            <hr>

          </div>
        @endforeach  
      </div>
      @endisset
      <!-- TOP CMT PANEL -->
    </div>
    <!-- PANELS -->
  </div>

</div>
<!-- /TOP POST -->