
    <section class="px-5 bg-navbar nav-bg-img pb-5">
        @include('includes.frontend.navbar')

    </section>

    @include('includes.frontend.navigations')

	<div class="wrapper">

	    <div class="row m-0 r-Main-P mt-5">
            <div class="col-md-3 ">
                <div class="bg-white pl-3 pr-3">
                    <div class="pt-4 pb-4" style="min-height: 702px; max-height: 702px;">
                        <div class="pr">
                          <img src="{{$user->avatar !=''?asset($user->avatar): asset('uploads/user/default.jpg')}}" class="rounded-circle img-fluid main-profile" alt="" srcset="">
                          <div class="small-Circle bg-grey  user-staus-{{ $user->id }}"></div>
                        </div>
                        <div class="text-center f-22 cl-5757575">{{ ucwords($user->username) }}</div>
                        <div class="cl-a8a8a8 f-17 text-center">{{ $user->user_type=='specialist'? ucwords($user->specialist->category->name) :'' }}</div>
                        {{-- <div class="row m-0  pt-3 pb-3 border-bottom cl-a8a8a8">
                          <div class="col-md-6 col-md-6 p-0">
                            <div class="f-17">Reviews:</div>
                          </div>
                          <div class="col-md-6 col-md-6 p-0 text-end d-flex justify-content-end">
                            <div class="f-17 text-end">5.0 (21)</div>
                          </div>
                        </div> --}}
                        <div class="row m-0  pt-3 pb-3 border-bottom cl-a8a8a8">
                          <div class="col-md-6 col-md-6 p-0 ">
                            <div class="f-17">Location:</div>
                          </div>
                          <div class="col-md-6 col-md-6 p-0 text-end d-flex justify-content-end">
                            <div class="f-17 text-end">{{ ucwords($user->country) }}</div>
                          </div>
                        </div>
                        @if($user->user_type=='specialist')
                            @if($user->specialist->languages !=null)
                                @if(json_decode($user->specialist->languages))
                                    @foreach(json_decode($user->specialist->languages) as $lang)
                                        <div class="row m-0  pt-3 pb-3 border-bottom cl-a8a8a8">
                                            <div class="col-md-6 col-md-6 p-0 ">
                                                <div class="f-17 text-end" >{{ $lang }}</div>
                                            </div>
                                            <div class="col-md-6 col-md-6 p-0 text-end d-flex justify-content-end">
                                                <div class="f-17 text-end">Primary</div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            @endif
                        @endif
                    </div>
                </div>
            </div>
	        <div class="col-sm-12 col-md-3 col-lg-3 col-xs-12 pl-0 pr-0">
	            <div class="card" style="min-height: 702px; max-height: 702px;    ">
        			<div class="card-header border-0">
        				<div class="title border-0">All Conversations ({{App\User::where('id', '!=',Auth::user()->id)->where('user_type','!=','admin')->get()->count()}})</div>
        			</div>
        			<div class="card-body pl-0 pr-0">
        				<div class="d-flex">
        				    
        				     @if(App\User::where('id', '!=',Auth::user()->id)->where('user_type','!=','admin')->get()->count() > 0)
			                    
			                    <ul class="list-group " style="width:100%;">
                			        @foreach(App\User::where('id', '!=',Auth::user()->id)->where('user_type','!=','admin')->get() as $u)
                                        <a data-url="{{ route('chat.user.switch',$u->id) }}" onclick="chatUserSwitch(this);" type="button" class="h-85 border  list-group-item-action   border-left-0 border-right-0 @if($user->id==$u->id) bg-3ac754 text-white @else bg-white @endif">
                			                <div class="row m-0  pt-3">
                                                <div class="col-md-3">
                                                    <div class="parent"><img src="{{$u->avatar!=''?asset($u->avatar): asset('uploads/user/default.jpg')}}" class="rounded-circle img-fluid smallProfile" alt=""
                                                    srcset="">
                                                    <div class="parentCircle-Child bg-grey  user-staus-{{ $u->id }}"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 p-0 f-13 d-flex flex-column justify-content-center">
                                                    <div>{{ ucwords($u->username) }}</div>
                                                    <div class="pt-1" id="message-div-{{ $u->id }}"></div>
                                                </div>
                                                <div class="col-md-2 pl-0 d-flex flex-column justify-content-center align-items-center">
                                                    <div class="notification-divMain bg-3ac754 d-none"><span class="cl-9b9461 d-flex justify-content-center align-items-center text-white" id="badge-{{ $u->id }}"></span></div>
                                                    <div class="f-10 pt-1" id="time-div-{{ $u->id }}"></div>
                                                </div>
                                            </div>
                                        </a>
                			        @endforeach
            			        </ul>
            			    @endif
        				    
        					
        				</div>
        			</div>
        			<div class="card-footer border-0" ></div>
        		</div>
	            
	        </div>
	        <div class="col-sm-7 col-md-6 col-lg-6 col-xs-12 pl-0">
	            <div class="card" style="min-height: 702px; max-height: 702px;">
        			<div class="card-header">
        			   <div class="row m-0 align-items-center border-bottom pb-2">
        			       <div class="col-md-7 col-lg-7 p-0"> 
        			       <div class="d-flex">
        			           <div>  <div class="parent"><img src="{{ $user->avatar?asset($user->avatar): asset('uploads/user/default.jpg') }}" class="rounded-circle img-fluid smallProfile" alt=""
                                srcset="">
                            <div class="parentCircle-Child bg-grey user-staus-{{ $user->id }}" ></div>

                                           </div></div>
                                <div class="pl-2">
                                    <div>{{ ucwords($user->username) }}</div>
                                    <div class="d-flex">
                                        <div class="cl-a8a8a8 f-11 user-status"></div>
                                        <div class="border-right pl-1 pr-1"></div> <div class="cl-a8a8a8 f-11 ml-1" id="local_time"></div>
                                    </div>
                                </div>
        			       </div>
        			      </div>
        			      <div class="col-md-5 col-lg-5 d-flex justify-content-between">
        			          <!--<span><img src="{{asset('assets/frontend/images/chat/search.png')}}" class="" alt="" srcset=""></span>-->
        			          <input class="border rounded f-14 pl-2" style="height:30px;" type="text" onkeyup="searchInput(this);" placeholder="Search Messages...">
        			          <button onclick="scrollBodyBottom();" class="my-custom-btn"><i class="fa fa-angle-down" aria-hidden="true"></i></button>
        			          <button onclick="scrollBodyTop();" class="my-custom-btn"><i class="fa fa-angle-up" aria-hidden="true"></i></button>
        			          <span class="ml-1" id="filter-count"></span>
        			      <!--<div></div>-->
        			      <!--<span class="pl-3"><img src="{{asset('assets/frontend/images/chat/Path-82.png')}}" class="" alt="" srcset=""></span></div>-->
        	
        			                   </div>
        			</div>
        			<div class="card-body messag-log" style="max-height: 417px !important;min-height: 417px !important;">
        			   
        
        				{{-- <div class="d-flex justify-content-center">
        					<div class="spinner-border text-success" role="status">
        						<span class="sr-only">Loading...</span>
        					</div>
        				</div> --}}
        
        				
        			</div>
        			
        			<div class="card-footer border-0 pl-3 pr-3" >
        				<div class="users text-uppercase pl-4" style="height: 23px;"></div>
        				<div id="imagePreview" style="margin-left: -19px !important;height:90px" class="d-flex"></div>
        				<form id="chat-form" method="post" class="mt-1 ">
        					<div class="input-group border-top d-flex align-items-center pb-2">
        						<textarea  name="content" class="form-control  pl-0" placeholder="Type your message ..." autocomplete="off"></textarea>
        						<div id="emojis" class="d-none" style="position: absolute; bottom: 102%; right: 26%;"></div>
        						<span class="pl-3" onclick="if($('#emojis').hasClass('d-none')){ $('#emojis').removeClass('d-none') }else{ $('#emojis').addClass('d-none') }">	<img src="{{asset('assets/frontend/images/chat/Group-150.png')}}" class="" alt="" srcset="" style="cursor:pointer;" ></span>
        						<input type="file"  name="img" style="display:none;" id="img" onchange="fileValidation();">
        			        	<img src="{{asset('assets/frontend/images/chat/Path-87.png')}}" class="" onclick="$('#img').click();" alt="" srcset="" style="cursor:pointer;" >
        						
        					
        						<div class="input-group-btn">
        							<button type="button" class="btn btn-primary send-msg bg-3ac754 border-0 ">Send&nbsp; <img src="{{asset('assets/frontend/images/chat/Path-88.png')}}" class="" alt="" srcset=""></button>
        						</div>
        					</div>
        				</form>
        			</div>
        		</div>
	        </div>
	    </div>
	</div>
	
	<!-- The Modal -->
    <div id="myModal" class="modal" style="z-index:10;">
      <span class="close">&times;</span>
      <img class="modal-content" id="img01" style="width: auto;height: 80%;margin: 0px auto;">
      <div id="caption"></div>
    </div>
    <!-- E I G H T    S E C T I O N  S T A R T -->
    <section class="main_padding pt-70  w-100">
        <div class="w-100 border-bcbcbc"></div>
    </section>

    <!-- E I G H T    S E C T I O N  E N D  -->
        @include('includes.frontend.footer')
    <!-- N I N E    S E C T I O N  S T A R T -->
    
    <!-- N I N E    S E C T I O N  E N D  -->

    <!-- T E N    S E C T I O N  S T A R T  -->
    

    <!-- T E N    S E C T I O N  E N D  -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.validate.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/app.js') }}"></script>
    <script src="{{ asset('assets/vendor/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
    <script src="{{ asset('assets/admin/dist/js/custome.js') }}"></script>
    
    <script>

        function chatUserSwitch(elem)
        {
            $.ajax({
                url:$(elem).data('url'),
                type:"get",
                success:function(data){
                    $('#body-content').html(data);
                }
            });
        }
       
        @if(Auth::check())
            setInterval(function(){
                firebase.database().ref('/chats').orderByChild("reciever_status").equalTo("{{ Auth::user()->id }}unread").on("value", function(ysnapshot) {
                    var chat_html = "";
                    var chk =0;
                    if(ysnapshot.val() != null) {
                        $.each(ysnapshot.val(),function(){
                            if(this.sender_id !=chk)
                            {
                                var count = 0;
                                if(this.reciever_status){
                                    firebase.database().ref('/chats').orderByChild("status").equalTo(this.sender_reciever+"unread").on("value", function(cSnapshot) {
                                        count = cSnapshot.numChildren();
                                        
                                    });

                                    firebase.database().ref('/chats').orderByChild("status").equalTo(this.sender_reciever+"unread").limitToLast(1).on("value", function(snapshot) {
                                        if(snapshot.val() !=null)
                                        {
                                            $.each(snapshot.val(),function(){
                                                var cnt = '';
                                                var c_url = '{{ route("single.chat", ":id") }}';
                                                c_url = c_url.replace(':id',this.sender_id);
                                                var s_url = '{{ route("chat.user.status", ":id") }}';
                                                s_url = s_url.replace(':id',this.sender_id);
                                                if(this.content.length>20 ){ cnt = this.content.substring(0,20)+"..." }else{ cnt=this.content; }
                                                chat_html += '<a class="dropdown-item d-flex row m-0 pt-2" href="'+c_url+'">';
                                                    chat_html+='<div class="col-md-2 p-0">';
                                                        chat_html +='<img src="'+this.avatar+'" alt="" class="img-fluid">';
                                                        $.ajax({
                                                            url:s_url,
                                                            type:"get",
                                                            success:function(data)
                                                            {
                                                                if(data.next>data.current)
                                                                {
                                                                    chat_html+='<span class="ml--1 green-dot mt-1"></span>';
                                                                }else{
                                                                    chat_html+='<span class="ml--1 mt-1"></span>';
                                                                }
                                                            }
                                                        });
                                                        // chat_html+='<span class="ml--1 mt-1"></span>';
                                                    chat_html+='</div>';
                                                    
                                                    chat_html+='<div class="col-md-6 pl-2 pt-1 p-0">';
                                                        chat_html+='<div class="row m-0"><div class="dropdown-heading">'+this.name[0].toUpperCase() + this.name.slice(1)+'</div></div>';
                                                        chat_html+='<div class="row m-0"><div class="dropdown-contnt">'+cnt+'</div></div>';
                                                    chat_html+='</div>';

                                                    chat_html+='<div class="col-md-3 p-0">';
                                                        chat_html+='<div class="row m-0 justify-content-end mt-1"><span class="green-dot-nmbr">'+count+'</span></div>';
                                                        chat_html+='<div class="row m-0 justify-content-end mt-1"><span class="dropdown-contnt">'+moment(this.created_at).tz('{{ Auth::user()->time_zone }}').format('h:mm a')+'</span></div>';
                                                    chat_html+='</div>';
                                                chat_html+="</a>";
                                            });
                                            
                                        }
                                        
                                    });
                                }
                                
                                chk = this.sender_id;
                            }
                        });
                        $("#nav-home").html(chat_html);
                    }
                });
            },1000);
        @endif

        $(function () {
            $(".select2").select2();
            $(".example1")
                .DataTable({
                    responsive: true,
                    lengthChange: false,
                    autoWidth: false,
                    // "scrollX": true,
                    // buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
                })
                .buttons()
                .container()
                .appendTo(".dataTables_wrapper .col-md-6:eq(0)");

        });
    </script>
@section('extra-script')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous"></script>
	<script src="{{ asset('assets/frontend/js/emoji/jquery.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/emoji/emoji.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/emoji/DisMojiPicker.js') }}"></script>
	
	<script>
	
	    var index = 0;
	    var total = 0;
        var modal = document.getElementById("myModal");
        
        $("#emojis").disMojiPicker()
        $("#emojis").picker(emoji =>$('textarea[name="content"]').val($('textarea[name="content"]').val()+emoji));
        twemoji.parse(document.body);
      
        function scrollBodyBottom(){
            if(total >0)
            {
                if(index<total){
                    ++index;
                    console.log(index+" : "+total);
                }
                
                var elmnt = document.getElementById("span-"+index);
                elmnt.scrollIntoView();
                window.scrollTo(0, 0);
            }
            
        }
        
        function scrollBodyTop(){
            if(total >0)
            {
                if(index>0){
                    --index;
                    console.log(index+" : "+total);
                }
                var elmnt = document.getElementById("span-"+index);
                elmnt.scrollIntoView();
                window.scrollTo(0, 0); 
            }
            
        }
        
       function searchInput(elem)
       {
           index = 0;
           total = 0;
            
            var filter = $(elem).val(), count = 0;
            
               
                $(".chat-content-area").each(function(){
                    var originalText = $(this).text();
                    if(filter!='')
                    {
                        if ($(this).text().search(new RegExp(filter, "igm")) < 0) {
                            $(this).children('span').removeClass('highlight');
                            $(this).children('span').css('color','#FFFFFF');
                        } else {
                            count++;
                            total = count;
                            
                            var regex = new RegExp("("+filter+")", "igm");
                            var spn = '<span class="highlight" id="span-'+count+'">'+filter+'</span>';
                            $(this).html(originalText.replace(regex, spn));
                        }
                    }else{

                        let txt = $(this).children('span').text();
                        // alert(txt);
                        $(this).children('span').removeAttr('id');
                        $(this).children('span').removeAttr('class');
                        $(this).html(originalText.replace('<span>'+txt+'</span>', txt));
                        // $(this).children('span').removeClass('highlight');
                        // $(this).children('span').css('color','#FFFFFF');
                        
                    }
                });
            
            var numberItems = count;
            $("#filter-count").text(count);
        }
        
        function ajaxCommonCode(){
            
            $.ajax({
               url:"{{ route('chat.user.update',Auth::user()->id) }}",
               type:"get",
               success:function(data)
               {
                   console.log(data);
               }
            });
            
            $.ajax({
                url:"{{ route('chat.updated.users',Auth::user()->id) }}",
                type:"get",
                success:function(data)
                {
                    $.each(data,function(){
                        if(this.next > this.current)
                        {
                            $('.user-staus-'+this.id).addClass('bg-success');
                            $('.user-staus-'+this.id).removeClass('bg-grey');
                        }else{
                            $('.user-staus-'+this.id).removeClass('bg-success');
                            $('.user-staus-'+this.id).addClass('bg-grey');
                        }
                    });
                }
            });
            
        }
        
        function imagePopUp(e){
            var modalImg = document.getElementById("img01");
            var captionText = document.getElementById("caption");
            modal.style.display = "block";
            modalImg.src = e.src;
            captionText.innerHTML = e.alt;
        }
        
        var span = document.getElementsByClassName("close")[0];
        span.onclick = function() { 
          modal.style.display = "none";
        }
	
		var old_users_val = $(".users").html();
        
        function deleteImage(){
            $('#img').val("");
            $('#imagePreview').html("");
        }
        
        function fileValidation() {
            var fileInput = document.getElementById('img');
            var filePath = fileInput.value;
            var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif|\.JPG|\.JPEG|\.PNG|\.GIF|\.pdf|\.doc|\.docx)$/i;
            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type only image is allowed');
                fileInput.value = '';
                return false;
            } 
            else 
            {
              
                if (fileInput.files && fileInput.files[0]) {
                    const name = fileInput.files[0].name;
                    const lastDot = name.lastIndexOf('.');
                    const fileName = name.substring(0, lastDot);
                    const ext = name.substring(lastDot + 1).toLowerCase();
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        var html = '<span style="position: relative; cursor: pointer; right: -96px; height: 20px; top: 4px; width: 20px; border-radius: 50%; outline: none !important;" onclick="deleteImage();"><i class="fa fa-times" aria-hidden="true" style="position: absolute; color: red; right: 4px; top: 1px; height: 14px; font-size: 12px;"></i></span>';
                        if(ext=='pdf')
                        {
                            html+='<div class="d-flex flex-column"><i class="fa fa-file-pdf-o" aria-hidden="true" style=" position: relative; top: 22px;"></i><div style=" position: relative; top: 25px;">'+name.substring(0,10) + "..."+'</div></div>';
                        }else if(ext=='docx' || ext=='doc'){
                            html += '<div class="d-flex flex-column"><i class="fa fa-file-word-o" aria-hidden="true" style=" position: relative; top: 22px;"></i><div style=" position: relative; top: 25px;">'+name.substring(0, 10) + "..."+'</div></div>';
                        }else{
                            html+='<img src="' + e.target.result+ '" style="height:100px;width:100px;cursor:pointer;" onclick="imagePopUp(this);"/>';
                        }
                        document.getElementById('imagePreview').innerHTML = html;
                            
                    };
                      
                    reader.readAsDataURL(fileInput.files[0]);
                }
            }
        }

		var scroll_bottom = function() {
		    var log = $('.messag-log');
            log.animate({ scrollTop: log.prop('scrollHeight')}, 0);
		}

		var escapeHtml = function(unsafe) {
		    return unsafe
		         .replace(/&/g, "&amp;")
		         .replace(/</g, "&lt;")
		         .replace(/>/g, "&gt;")
		         .replace(/"/g, "&quot;")
		         .replace(/'/g, "&#039;");
		 }

        const messaging = firebase.messaging();
        messaging.usePublicVapidKey("{{config('services.firebase.public_key')}}");
        function sendTokenToServer(fcm_token) {
            const user_id = '{{auth()->user()->id}}';
            $.ajax({
                url:"{{ route('save-token') }}",
                type:"POST",
                data:{fcm_token:fcm_token,user_id:user_id,_token:"{{ csrf_token() }}"},
                success:function(data)
                {
                    console.log(data);
                }
            });
        }

        function retreiveToken(){
            messaging.getToken().then((currentToken) => {
                if (currentToken) {
                    sendTokenToServer(currentToken);
                }
            }).catch((err) => {
                console.log(err.message);
            });
        }
        retreiveToken();
        messaging.onTokenRefresh(()=>{
            retreiveToken();
        });

        function formatAMPM() {
          var date = new Date();
          var hours = date.getHours();
          var minutes = date.getMinutes();
          var seconds = date.getSeconds();
          var ampm = hours >= 12 ? 'PM' : 'AM';
          hours = hours % 12;
          hours = hours ? hours : 12; // the hour '0' should be '12'
          minutes = minutes < 10 ? '0'+minutes : minutes;
          return strTime = date.getMonth() + '/' + date.getDay()+'/'+date.getFullYear()+' '+ hours + ':' + minutes +':'+ seconds + " " +ampm;
        }
        
		var   sender_reciever =  "@if(App\Chat::where('sender_id',Auth::user()->id)->where('reciever_id',$id)->first() !=null){{App\Chat::where('sender_id',Auth::user()->id)->where('reciever_id',$id)->first()->sender_reciever}}@elseif(App\Chat::where('sender_id',$id)->where('reciever_id',Auth::user()->id)->first() !=null){{App\Chat::where('sender_id',$id)->where('reciever_id',Auth::user()->id)->first()->sender_reciever}}@else{{Auth::user()->id.$id}}@endif";
        console.log("sender_reciever "+sender_reciever);
		var sender ='{{ Auth::user()->id }}';
		var reciever='{{ $id }}';
		// firebase.database().ref('/chats').remove();
		firebase.database().ref('/chats').orderByChild("sender_reciever").equalTo(sender_reciever.toString()).on('value', function(snapshot) {

			var chat_element = '';
		    
			if(snapshot.val() != null) {
				$.each(snapshot.val(),function(){
					var mt = "mt-0";
					chat_element +='<div class="d-flex mt-4">';
        		        chat_element +='<div class="col-lg-1 p-0"><div class="parent"><img src="'+this.avatar+'" class="rounded-circle img-fluid smallProfile" alt="" srcset=""></div></div>';
        		        chat_element +='<div class="col-lg-11 pl-3">';
        		            chat_element +='<div>'+this.name[0].toUpperCase() + this.name.slice(1)+'<span class="f-12 pl-2">'+moment(this.created_at).tz('{{ Auth::user()->time_zone }}').format('M-D-Y h:mmA')+'</span></div> ';
        		            
                            if(this.content && this.content !='' && this.content!='undefined')
						    {
						        mt="";
						        chat_element += '<div class="cl-a8a8a8 f-12 chat-content-area">';
    								chat_element += this.content;
    							chat_element += '</div>';
						    }

                            if (this.file_type=='pdf' && this.file_link !='')
    					    {
                            	chat_element += '<div class="d-flex justify-content-left mb-2"><a href="'+this.file_link+'" download="download" style="position: relative;left: 3px;color:#5d616d;"><div class="d-flex flex-column"><i class="fa fa-file-word-o" aria-hidden="true" style="position: relative; top: 13px; font-size: 15px; left: 4px;">&nbsp;'+this.file_name+'</i></div></a>';
                                chat_element +='</div>';
                            }
                            else if ((this.file_type=='docx' || this.file_type=='doc') && this.file_link !='')
    					    {
                            	chat_element += '<div class="d-flex justify-content-left mb-2"><a href="'+this.file_link+'" download="download" style="position: relative;color:#5d616d;"><div class="d-flex flex-column"><i class="fa fa-file-word-o" aria-hidden="true" style="position: relative; top: 13px; font-size: 15px; left: 4px;">&nbsp;'+this.file_name+'</i></div></a>';
                                chat_element +='</div>';
                            }
                            else if (this.file_type=='img' && this.file_link !='')
    					    {
                            	chat_element += '<div class="d-flex justify-content-left mb-2"><a href="'+this.file_link+'" download="download" style="position: relative;left: 17px;"><i class="fa fa-download" aria-hidden="true"></i></a>';
                                chat_element +='<img src="' + this.file_link + '" onclick="imagePopUp(this);" style="height:100px;width:100px;cursor:pointer;"/></div>';
                            }
        		            chat_element +='</div>';
        		        chat_element +='</div>';
        		    chat_element +='</div>';
        		    
					$(".messag-log").html(chat_element);
				});
			}
			scroll_bottom();
		}, function(error) {
			alert('ERROR! Please, open your console.')
			console.log(error);
		});
		
		firebase.database().ref('/typing').on('value', function(snapshot) {
			var user = snapshot.val();
			if(user && user.name == '{{ $user->username }}') {
				$(".users").html(user.name + ' is typing....');
				
			}else{
				$(".users").html(' ');
			}

		});

		// Set the card height equal to the height of the window
		$(".card-body").css({
			height: $(window).outerHeight() - 200,
			overflowY: 'auto'
		});

		$(document).on('keypress',function(e) {
			if(e.which == 13 && !e.shiftKey) {
				e.preventDefault();
				var chat_content = $('input[name=content]').val();
			    var img = $('input[name=img]').val();
			    var chk = false;
				if($('textarea[name=content]').val() !='' && $('input[name=img]').val()!=''){ chk = true; }
    			else if($('textarea[name=content]').val() =='' && $('input[name=img]').val()!=''){ chk = true; }
    			else if($('textarea[name=content]').val() !='' && $('input[name=img]').val()==''){ chk = true; }
				if(chk)
				{
					$(".send-msg").click();
				}
			}
		});

		$(".send-msg").click(function() {
			var chat_content = $('textarea[name=content]').val();
			var img = $('input[name=img]').val();
			var chk = false;
			var frm = document.getElementById('chat-form');
			var formData = new FormData(frm);
			formData.append('sender',sender);
			formData.append('reciever',reciever);
			formData.append('name','{{ Auth::user()->username }}');
            formData.append("_token","{{ csrf_token() }}");
			if(chat_content !='' && img!=''){ chk = true; }
			else if(chat_content =='' && img!=''){ chk = true; }
			else if(chat_content !='' && img==''){ chk = true; }
			if(chk)
			{
				$.ajax({
					url: '{{ route("chat.store") }}',
					cache:false,
                    contentType: false,
                    processData: false,
					data: formData,
					method: 'post',
					beforeSend: function() {
						$(this).attr('disabled', true);
						let name = "{{ Auth::user()->username }}";
						name = name[0].toUpperCase() + name.slice(1);
				        var chat_element = '';
				        chat_element +='<div class="d-flex mt-3">';
            		        chat_element +='<div class="col-lg-1 p-0"><div class="parent"><img src="{{ Auth::user()->avatar!=''?asset(Auth::user()->avatar): asset("uploads/user/default.jpg")}}" class="rounded-circle img-fluid smallProfile" alt="" srcset=""></div></div>';
            		        chat_element +='<div class="col-lg-11 pl-3">';
            		            chat_element +='<div>'+name+'<span class="f-12 pl-2">'+moment(this.created_at).tz('{{ Auth::user()->time_zone }}').format('M-D-Y h:mmA')+'</span></div> ';
            		            if (document.getElementById('img').files && document.getElementById('img').files[0])
        					    {
                                    var reader = new FileReader();
                                    reader.onload = function(e) {
                                        
                                            chat_element += '<div class="d-flex justify-content-left mb-2"><a href="'+e.target.result+'" download="download" style="position: relative;left: 17px;"><i class="fa fa-download" aria-hidden="true"></i></a>';
                                            chat_element +='<img src="' + e.target.result + '" onclick="imagePopUp(this);" style="height:100px;width:100px;cursor:pointer;"/></div>';
                                    };
                                    reader.readAsDataURL(document.getElementById('img').files[0]);	
                                }
                                var cnt = $('textarea[name=content]').val();
                                if (document.getElementById('img').files && document.getElementById('img').files[0]){
                                    
                                    const fname = document.getElementById('img').files[0].name;
                                    const lastDot = fname.lastIndexOf('.');
                                    const fileName = fname.substring(0, lastDot);
                                    const ext = fname.substring(lastDot + 1).toLowerCase();
                                    if(ext=='pdf'||ext=="docx" ||ext=="dox"){
                                        cnt=fname;
                                    }

                                }
                                
                                if(cnt !='')
    						    {
    						        mt="";
    						        chat_element += '<div class="cl-a8a8a8 f-12 chat-content-area">';
        								chat_element += cnt;
        							chat_element += '</div>';
    						    }
                                
            		            chat_element +='</div>';
            		        chat_element +='</div>';
            		    chat_element +='</div>';
				        
    				    
    					$(".messag-log").append(chat_element);
    					$('textarea[name=content]').val('');
				        $('input[name=img]').val('');
				        $('#imagePreview').html("");
				        $('#emojis').addClass('d-none');
    					scroll_bottom();
					},
					complete: function() {
						$(this).attr('disabled', false);
					},
					success: function(data) {
					    $('#img').val('');
						scroll_bottom();
					}
				});
			}else{
			    console.log("not fine");
			}
			
		});

		var timer;
		$("#chat-form [name=content]").keyup(function() {
			var ref = firebase.database().ref('typing');
			ref.set({
				name: '{{ Auth::user()->username }}'
			});

			timer = setTimeout(function() {
				ref.remove();
			}, 2000);
		});


		messaging.onMessage((payload)=>{
            var notify;
            notify = new Notification(payload.notification.title,{
                body: payload.notification.body,
                icon: payload.notification.icon,
                tag: "Dummy"
            });
        });

        self.addEventListener('notificationclick', function(event) {       
            event.notification.close();
        });	
        
        function focusOnInput()
        {
            firebase.database().ref('/chats').orderByChild("status").equalTo(sender_reciever+"unread").once("value", function(ysnapshot) {
                $.each(ysnapshot.val(),function(i,v){
                    if(v.content){content = v.content;}else{content ='';}
                        if(v.sender_id !=sender)
                        {
                            firebase.database().ref('/chats/'+i).set({avatar:v.avatar,content,file_type:v.file_type,file_link:v.file_link,ip:v.ip,name:v.name,created_at:v.created_at,reciever_id:v.reciever_id,sender_id:v.sender_id,sender_reciever:v.sender_reciever,status:"read",reciever_status:"read"})
                            console.log("status has been update of : "+i+"  ");
                        }
    		             
                });
            });
        }
        
        function dateDifference(date1,date2)
        {
            const diffTime = Math.abs(date2 - date1);
            const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)); 
            return diffDays;
        }
        
        window.onload = function() {
            focusOnInput();
            
            $.ajax({
               url:"{{ route('chat.user.update',Auth::user()->id) }}",
               type:"get",
               success:function(data)
               {
                   console.log(data);
               }
            });
            
            $.ajax({
                url:"{{ route('chat.updated.users',Auth::user()->id) }}",
                type:"get",
                success:function(data)
                {
                    console.log(data);
                    $.each(data,function(){
                         if(this.next > this.current)
                        {
                            $('.user-staus-'+this.id).addClass('bg-success');
                            $('.user-staus-'+this.id).removeClass('bg-grey');
                            if(this.id=="{{$user->id}}")
                            {
                                $('.user-status').html('active');
                            }
                            
                        }else{
                            $('.user-staus-'+this.id).removeClass('bg-success');
                            $('.user-staus-'+this.id).addClass('bg-grey');
                            if(this.id=="{{$user->id}}")
                            {
                                $('.user-status').html("Last seen "+this.status);
                            }
                            
                        }
                    });
                }
            });
        }
        setInterval(function(){
            @if(App\User::where('id', '!=',Auth::user()->id)->where('user_type','!=','admin')->get()->count() > 0)
    			@foreach(App\User::where('id', '!=',Auth::user()->id)->where('user_type','!=','admin')->get() as $u)
    			    sender_reciever_count ="@if(App\Chat::where('sender_id',Auth::user()->id)->where('reciever_id',$u->id)->first() !=null){{App\Chat::where('sender_id',Auth::user()->id)->where('reciever_id',$u->id)->first()->sender_reciever}}@elseif(App\Chat::where('sender_id',$u->id)->where('reciever_id',Auth::user()->id)->first() !=null){{App\Chat::where('sender_id',$u->id)->where('reciever_id',Auth::user()->id)->first()->sender_reciever}}@endif";
            		firebase.database().ref('/chats').orderByChild("status").equalTo(sender_reciever_count.toString()+"unread").on("value", function(ysnapshot) {
                        if(ysnapshot.numChildren()>0 && (sender_reciever_count == sender_reciever))
                        {
                            if(!$('#badge-{{ $u->id }}').parent('div').hasClass('d-none')){
                                $('#badge-{{ $u->id }}').parent('div').addClass('d-none');
                            }
                            
                        }
                        else if(ysnapshot.numChildren()>0 && (sender_reciever_count != sender_reciever) && {{ $u->id }}!={{ Auth::user()->id }}){
                            $('#badge-{{ $u->id }}').parent('div').removeClass('d-none');
                            $('#badge-{{ $u->id }}').html(ysnapshot.numChildren());
                        }
                        else{
                            $('#badge-{{ $u->id }}').parent('div').addClass('d-none');
                        }
                        
                    });
                    
                    firebase.database().ref('/chats').orderByChild("sender_reciever").equalTo(sender_reciever_count.toString()).limitToLast(1).on("value", function(snapshot) {
                        
                        if(snapshot.val() !=null)
                        {
                            $.each(snapshot.val(),function(){
                                
                                if(this.file_type="img" && this.file_link!='')
                                {
                                    $('#message-div-{{ $u->id }}').html('Image');
                                }else{ 
                                    var cnt = '';
                                    if(this.content.length>20 ){ cnt = this.content.substring(0,20)+"..." }else{ cnt=this.content; }
                                    $('#message-div-{{ $u->id }}').html(cnt);
                                    
                                }
                                if(dateDifference(new Date(),new Date(this.created_at))==1 || dateDifference(new Date(),new Date(this.created_at))==0)
                                {
                                    $('#time-div-{{ $u->id }}').html(moment(this.created_at).tz('{{ Auth::user()->time_zone }}').format('h:mmA'));
                                }
                                else{
                                    $('#time-div-{{ $u->id }}').html(dateDifference(new Date(),new Date(this.created_at))+" days");
                                }
                                
                                
                            });
                            
                        }
                        
                    });
    		    @endforeach
    	    @endif
        },100);
        
        
        
        
        setInterval(function(){
            $.ajax({
               url:"{{ route('chat.user.update',Auth::user()->id) }}",
               type:"get",
               success:function(data)
               {
                   console.log(data);
               }
            });
            
            $.ajax({
                url:"{{ route('chat.updated.users',Auth::user()->id) }}",
                type:"get",
                success:function(data)
                {
                    console.log(data);
                    $.each(data,function(){
                        if(this.next > this.current)
                        {
                            $('.user-staus-'+this.id).addClass('bg-success');
                            $('.user-staus-'+this.id).removeClass('bg-grey');
                            if(this.id=="{{$user->id}}")
                            {
                                $('.user-status').html('active');
                            }
                            
                        }else{
                            $('.user-staus-'+this.id).removeClass('bg-success');
                            $('.user-staus-'+this.id).addClass('bg-grey');
                            if(this.id=="{{$user->id}}")
                            {
                                $('.user-status').html("Last seen "+this.status);
                            }
                            
                        }
                    });
                }
            });
        },10000);
        
        setInterval(function(){
            document.getElementById('local_time').innerHTML ="Local time "+moment(new Date()).tz("{{ $user->time_zone }}").format('MMM D h:mmA');
        },1000);    
	</script>
@endsection