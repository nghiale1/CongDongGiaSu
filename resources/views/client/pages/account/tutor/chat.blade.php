@push('css')
<style>
    .mesgs {
        float: left;
        width: 100%;
    }

    img {
        max-width: 100%;
    }

    .inbox_people {
        background: #f8f8f8 none repeat scroll 0 0;
        float: left;
        overflow: hidden;
        width: 40%;
        border-right: 1px solid #c4c4c4;
    }

    .inbox_msg {
        border: 1px solid #c4c4c4;
        clear: both;
        overflow: hidden;
    }

    .top_spac {
        margin: 20px 0 0;
    }


    .recent_heading {
        float: left;
        width: 40%;
    }

    .srch_bar {
        display: inline-block;
        text-align: right;
        width: 60%;
        padding:
    }

    .headind_srch {
        padding: 10px 29px 10px 20px;
        overflow: hidden;
        border-bottom: 1px solid #c4c4c4;
    }

    .recent_heading h4 {
        color: #05728f;
        font-size: 21px;
        margin: auto;
    }

    .srch_bar input {
        border: 1px solid #cdcdcd;
        border-width: 0 0 1px 0;
        width: 80%;
        padding: 2px 0 4px 6px;
        background: none;
    }

    .srch_bar .input-group-addon button {
        background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
        border: medium none;
        padding: 0;
        color: #707070;
        font-size: 18px;
    }

    .srch_bar .input-group-addon {
        margin: 0 0 0 -27px;
    }

    .chat_ib h5 {
        font-size: 15px;
        color: #464646;
        margin: 0 0 8px 0;
    }

    .chat_ib h5 span {
        font-size: 13px;
        float: right;
    }

    .chat_ib p {
        font-size: 14px;
        color: #989898;
        margin: auto
    }

    .chat_img {
        float: left;
        width: 11%;
    }

    .chat_ib {
        float: left;
        padding: 0 0 0 15px;
        width: 88%;
    }

    .chat_people {
        overflow: hidden;
        clear: both;
    }

    .chat_list {
        border-bottom: 1px solid #c4c4c4;
        margin: 0;
        padding: 18px 16px 10px;
    }

    .inbox_chat {
        height: 550px;
        overflow-y: scroll;
    }

    .active_chat {
        background: #ebebeb;
    }

    .incoming_msg_img {
        display: inline-block;
        width: 6%;
    }

    .received_msg {
        display: inline-block;
        padding: 0 0 0 10px;
        vertical-align: top;
        width: 92%;
    }

    .received_withd_msg p {
        background: #ebebeb none repeat scroll 0 0;
        border-radius: 3px;
        color: #646464;
        font-size: 14px;
        margin: 0;
        padding: 5px 10px 5px 12px;
        width: 100%;
    }

    .time_date {
        color: #747474;
        display: block;
        font-size: 12px;
        margin: 8px 0 0;
    }

    .received_withd_msg {
        width: 57%;
    }


    .sent_msg p {
        background: #05728f none repeat scroll 0 0;
        border-radius: 3px;
        font-size: 14px;
        margin: 0;
        color: #fff;
        padding: 5px 10px 5px 12px;
        width: 100%;
    }

    .outgoing_msg {
        overflow: hidden;
        margin: 26px 0 26px;
    }

    .sent_msg {
        float: right;
        width: 46%;
    }

    .input_msg_write input {
        background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
        border: medium none;
        color: #4c4c4c;
        font-size: 15px;
        min-height: 48px;
        width: 100%;
    }

    .type_msg {
        border-top: 1px solid #c4c4c4;
        position: relative;
    }

    .msg_send_btn {
        background: #05728f none repeat scroll 0 0;
        border: medium none;
        border-radius: 50%;
        color: #fff;
        cursor: pointer;
        font-size: 17px;
        height: 33px;
        position: absolute;
        right: 0;
        top: 11px;
        width: 33px;
    }

    .messaging {
        padding: 0 0 50px 0;
    }

    .msg_history {
        height: 516px;
        overflow-y: auto;
    }

    .chat {
        position: fixed;
        width: 350px;
        left: 70%;
        bottom: 0;
    }

    .incoming_msg {
        display: flex;
    }
</style>
@endpush
<div class="mesgs">
    <div class="msg_history">
        <div class="content" id="msg_history"></div>
        <div class="" id="scroll"></div>

    </div>
    <div class="type_msg">
        <div class="input_msg_write">
            <form onsubmit="return sendMessage();" id="frmChat">
                <input type="text" id="message" class="write_msg" placeholder="Nội dung" autocomplete="off">
                <button class="msg_send_btn" type="submit"><i class="fa fa-paper-plane-o"
                        aria-hidden="true"></i></button>
            </form>
        </div>
    </div>
</div>
@push('script')
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.24.0/firebase-app.js"></script>

<!-- Include databse-->
<script src="https://www.gstatic.com/firebasejs/7.24.0/firebase-database.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
{{-- <script src="https://www.gstatic.com/firebasejs/7.24.0/firebase-analytics.js"></script> --}}

<script>
    // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyD4uUaDrmHpr170rPmIArFeLt2QbRwahQE",
    authDomain: "congdonggiasu.firebaseapp.com",
    databaseURL: "https://congdonggiasu.firebaseio.com",
    projectId: "congdonggiasu",
    storageBucket: "congdonggiasu.appspot.com",
    messagingSenderId: "383378586012",
    appId: "1:383378586012:web:c39f0621a556012c6e7059",
    measurementId: "G-1CFNCT9FP0"
  };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    //   firebase.analytics();
    var ID = "{!! \Auth::id() !!}";
    var senderId = "{!! \Auth::id() !!}";
    var chatId="{!! $tutor->gs_id !!}";
    var name=$('.get-name').attr('data-data');
    var avatar=$('.get-avatar').attr('data-data');
    const params = {
        tk_id: "{!! \Auth::id() !!}",
        gs_id: "{!! $tutor->gs_id !!}",
        // time:Date.now(),
    }
    let url='{{asset(":id")}}';

    function sendMessage() {
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "get",
                url: "{!!route('checkChatGS')!!}",
                data: params,
                dataType: "json",
                success: function (response) {
                    //get message
                    var message = document.getElementById("message").value;
                    //save in database
                    firebase.database().ref("messages").push({
                        "senderId" : senderId,
                        "chatId" : response.chatId,
                        "time" : Date.now(),
                        "message" : message,
                        "avatar" : message,
                        "name" : message,
                    });
                    var frm = document.getElementById('frmChat');
                    frm.reset();  // Reset all form data
                }
            });
                    return false;
              
    }
    function formatTime(time) { 

        var d = new Date(time);
        var result = d.getHours()+":"+d.getMinutes()+":"+
                    d.getSeconds()+"&nbsp;&nbsp;"+d.getFullYear()+"/"+(d.getMonth()+1)+"/"+d.getDate() + 
                    " " ;
        return result;
    }
    

    //listen for incoming message
    firebase.database().ref("messages").on("child_added", function (snapshot) {
        
        $(document).ready(function () {
            

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "get",
                url: "{!!route('checkChatGS')!!}",
                data: params,
                dataType: "json",
                success: function (response) {
                if (snapshot.val().chatId==response.chatId) {
                var html="";
                if(snapshot.val().senderId == ID){
                    html+="<div class='outgoing_msg'>";
                    html+="<div class='sent_msg'>";
                    html+="<p>"+snapshot.val().message+"</p>";
                    html+="<span class='time_date'>"+formatTime(snapshot.val().time)+"</span>";
                    html+="</div>";
                    html+="</div>";
                }
                else{url = url.replace(':id', snapshot.val().avatar);
                    html+="<div class='incoming_msg'>";
                    html+= "<div class='incoming_msg_img'>";
                    html+= "<img src='"+url+"' alt='"+snapshot.val().name+"'>";
                    html+="</div>";
                    html+="<div class='received_msg'>";
                    html+="<div class='received_withd_msg'>";
                    html+="<p>"+snapshot.val().message+"</p>";
                    html+="<span class='time_date'>" +formatTime(snapshot.val().time)+"</span>";
                    html+="</div>";
                    html+="</div>";
                    html+="</div>";
                }
            
            
            document.getElementById("msg_history").innerHTML += html;
            document.getElementById("scroll").scrollIntoView();
        
            }
                }
            });
        });
   
    });

    function deleteMessage(self) {
        // get message ID
        var messageId = self.getAttribute("data-id");

        // delete message
        firebase.database().ref("messages").child(messageId).remove();
    }

    // attach listener for delete message
    firebase.database().ref("messages").on("child_removed", function (snapshot) {
        // remove message node
        document.getElementById("message-" + snapshot.key).innerHTML = "Tin nhắn này đã bị xóa";
    });


</script>
@endpush