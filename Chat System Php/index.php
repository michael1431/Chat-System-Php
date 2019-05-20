<?php
include './functn.php';
if(isset($_POST['submit'])){
    $name = $_POST['u_name'];
    $msg = $_POST['msg'];
    $user_insert = user_insert($name,$msg);
    
  
    
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Chat system in php</title>
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <script>
        function ajax(){
           var req = new XMLHttpRequest;
            
             req.onreadystatechange  = function(){
                
                if(req.readyState==4 && req.status ==200){
                    
                    document.getElementById('chat').innerHTML = req.responseText;
                }
               
                
            }
            ///req.open('GET','chat.php',true); 
            // don't need this if we don't wanna to create another page called chat.php
            // here, i created this,but not used..
            // where all the chat records will be stored..
            // otherwise use the following format..
            // where the records will be stored in same page.. called index.php..
            req.open('GET',true);
            req.send();
            
            
        }
        setInterval(function(){ajax()},1000);
        
        
        </script>
       
    </head>
    <body onload="ajax();" class="" style="background-color: #581845" >
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="panel panel-info">
                        <div class="panel-heading panel-warning text-center">
<!--                            <b class="btn-lg">Chat System</b>-->
                            <span class="text-primary" style="font-family: cursive;font-weight: bold;font-size: 18px;">Chat System</span>
                            <br>
                            <br>
                            <div class="panel panel-body">
                                   <form action="" method="post">
                                    <table class="table table-condensed">
                                        <tr>
                                            <td><b style="color: brown ;font-family:sans-serif;">Name:</b></td>
                                            <td><input class="form-control" type="text" name="u_name" placeholder="enter name" required=""/><td>
                                        </tr>
                                        <tr>
                                            <td><b style="color: brown ;font-family:sans-serif;">Message:</b></td>
                                            <td><textarea class="form-control" name="msg" rows="4"  placeholder="enter your message" required=""></textarea></td>
                                   
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button class="btn btn-success pull-right" name="submit">Send</button>
                                        </td>
                                    </tr>
                                    </table>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
                
                 <div class="col-md-7">
                    <div class="panel panel-info">
                        <div class="panel-heading panel-warning text-center">
                          
               <span class="text-primary" style="font-family: cursive;font-weight: bold;font-size: 20px;">Chat Records</span>
               <br>
               
                            <div class="panel panel-body">
                                
                                <div id="chat">
                                 <?php
                                    //include './functn.php';
                                    $chats = get_all_chat();
                                    foreach ($chats as $all_chats) {
                                        ?>
                                    <span><b style="color:green;"><?php echo $all_chats['name'] . ':'; ?></b></span>
                                    <span class="text-center"><b style="color:blue;" ><?php echo $all_chats['msg']; ?></b></span><br>
                                        <span><b style="float:right;"><?php echo $all_chats['date']; ?></b></span>
                                        <?php
                                        echo '<hr>';
                                    }
                                 ?>   
                                    
                                </div>
                                
                            
                                
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                
                
            </div>
            
        </div>
    </body>
</html>
