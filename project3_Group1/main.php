
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Board</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="dashstyle.css">
    <style>
    body {

      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }


    .chat-container {
      max-width: 400px;
      margin: 50px auto;
      border: 1px solid #ccc;
      border-radius: 8px;
      overflow: hidden;
    }

    .chat-header {
      background-color: #2a1dad;
      color: #fff;
      padding: 10px;
      text-align: center;
    }

    .chat-messages {
      padding: 10px;
      height: 300px;
      overflow-y: auto;
      background-color: #fff;
    }

    .user-message, .bot-message {
      margin-bottom: 10px;
    }

    .user-message {
      text-align: right;
      color: #333;
    }

    .bot-message {
      text-align: left;
      color: #555;
    }

    .chat-input {
      padding: 10px;
      width: 100%;
      box-sizing: border-box;
      border-top: 1px solid #ccc;
      background-color: #fff;
    }

    .input-field {
      width: 80%;
      padding: 8px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
      margin-right: 8px;
    }

    .send-button {
          padding: 8px;
          background-color: #2a1dad;
          color: #fff;
          border: none;
          margin-top: 5px;
          border-radius: 4px;
          cursor: pointer;
        }
      </style>
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                
                   
        <img  src="img/10.png" alt="" width="260" height="70" style="border-radius: 5px;">
                
                 <li>
                    <a href="#">
                        <span class="icon">
                        </span>
                        <h2 class="title">Welcome! </h2     >

                    </a>
                </li>


                <li>
                    <a href="#" type="active">
                        <span class="icon">
                            <ion-icon name="home"></ion-icon>
                        </span>
                        <span class="title">Home</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Profile</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="book"></ion-icon>
                        </span>
                        <span class="title">Assignments</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="library"></ion-icon>
                        </span>
                        <span class="title">Library/Resources</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="trophy"></ion-icon>
                        </span>
                        <span class="title">Grades/Progress</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Settings</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Support/Help Desk</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>       
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="img/customer01.jpg" alt="">
                </div>
            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
               <a href="indexx.php">
                    <div class="card">
                    <div>
                        <div class="numbers">7 </div>
                        <div class="cardName">Courses</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="school"></ion-icon>
                    </div>
               </a>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">8 <small class="">events</small></div>
                        <div class="cardName">Calender</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="calendar"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">0</div>
                        <div class="cardName">Messages</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">-$742</div>
                        <div class="cardName">Financials</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recents</h2>
                        <a href="#" class="btn">View All</a>
                    </div>

                  <ul class="synopticList">
                        <li>
                            <div class="textPanel"><h2 style="margin-bottom: 11.0px;"><span style="font-family: Arial , Helvetica , sans-serif;"><span style="font-size: 11.0pt;"><span style="line-height: 107.0%;"><span style="font-size: 12.0pt;"><span style="line-height: 107.0%;"><span style="color: rgb(192,57,43);">IMPORTANT: </span>Clear Your Web Browser Cache</span></span></span></span></span></h2>

                            <p style="margin-bottom: 11.0px;"><span style="font-size: 16.0px;"><span style="font-family: Arial ,                            Helvetica , sans-serif;"><span style="line-height: 107.0%;"><span style="line-height: 107.0%;">Student DashBoard has recently been upgraded to a newer version, and users are advised to clear their web browser cache to resolve                        any issues related to web pages not loading or displaying properly. Prior to logging into Student DashBoard, we kindly                      request you to clear your web browser cache.</span></span></span></span></p>
                            
                            <p style="margin-bottom: 11.0px;"><span style="font-size: 16.0px;"><span style="font-family: Arial ,                            Helvetica , sans-serif;"><span style="line-height: 107.0%;"><span style="line-height: 107.0%;"></span></                        span></span></span></p>
                            
                            <p style="margin-bottom: 10.0px;text-align: justify;"><span style="font-size: 16.0px;"><span style="                            font-family: Arial , Helvetica , sans-serif;"><span style="background-color: white;"><span style="                          line-height: normal;"><span style="color: rgb(51,52,53);">The following are steps for doing so in                           popular browsers.</span></span></span></span></span></p>
                            
                        <ol>
                            <li style="margin-bottom: 11.0px;margin-left: 40.0px;text-align: justify;"><span style="font-size: 16.0px                       ;"><span style="font-family: Arial , Helvetica , sans-serif;"><span style="background-color: white;">                   <span style="line-height: normal;"><u><span style="color: blue;">Google Chrome</span></u><span style="                      color: rgb(51,52,53);"></span></span></span></span></span>
                        
                            <ol style="list-style-type: lower-alpha;">
                                <li style="margin-bottom: 11.0px;margin-left: 16.0px;text-align: justify;"><span style="font-size: 16                       .0px;"><span style="font-family: Arial , Helvetica , sans-serif;"><span style="background-color:                    white;"><span style="line-height: normal;"><span style="background-color: white;"><span style="                     color: rgb(0,17,51);"><a href="https://support.google.com/chrome/answer/2392709?hl=en&amp;                  visit_id=1-636455795709454841-2485028433&amp;rd=1" target="_blank" rel="noopener"><span style="color:                    rgb(51,102,187);">Chrome on a computer (Windows or Mac)</span></a></span></span><span style="          color: rgb(51,52,53);"></span></span></span></span></span></li>
                                <li style="margin-bottom: 11.0px;margin-left: 16.0px;text-align: justify;"><span style="font-size: 16                       .0px;"><span style="font-family: Arial , Helvetica , sans-serif;"><span style="background-color:                    white;"><span style="line-height: normal;"><span style="background-color: white;"><span style="                     color: rgb(0,17,51);"><a href="https://support.google.com/chrome/answer/2392709?hl=en&amp;                  co=GENIE.Platform%3DAndroid&amp;oco=1" target="_blank" rel="noopener"><span style="color: rgb(51,102,                   187);">Chrome on an Android device</span></a></span></span><span style="color: rgb(51,52,53);"></           span></span></span></span></span></li>
                                <li style="margin-bottom: 11.0px;margin-left: 16.0px;text-align: justify;"><span style="font-size: 16                       .0px;"><span style="font-family: Arial , Helvetica , sans-serif;"><span style="background-color:                    white;"><span style="line-height: normal;"><span style="background-color: white;"><span style="                     color: rgb(0,17,51);"><a href="https://support.google.com/chrome/answer/2392709?hl=en&amp;                  co=GENIE.Platform%3DiOS&amp;oco=1" target="_blank" rel="noopener"><span style="color: rgb(51,102,187)                   ;">Chrome on iPhone or iPad</span></a></span></span><span style="color: rgb(51,52,53);"></span></           span></span></span></span></li>
                            </ol>
    </li>
    <li style="margin-bottom: 11.0px;margin-left: 40.0px;text-align: justify;"><span style="font-size: 16.0px;"><span style="font-family: Arial , Helvetica , sans-serif;"><span style="background-color: white;"><span style="line-height: normal;"><u><span style="color: blue;">Mozilla Firefox</span></u><span style="color: rgb(51,52,53);"></span></span></span></span></span>
    <ol style="list-style-type: lower-alpha;">
        <li style="margin-bottom: 11.0px;margin-left: 16.0px;text-align: justify;"><span style="font-size: 16.0px;"><span style="font-family: Arial , Helvetica , sans-serif;"><span style="background-color: white;"><span style="line-height: normal;"><span style="color: rgb(51,52,53);"><a href="https://support.mozilla.org/en-US/kb/how-clear-firefox-cache" target="_blank" rel="noopener"><span style="color: rgb(5,99,193);">Firefox on a computer (Windows or Mac)</span></a></span></span></span></span></span></li>
        <li style="margin-bottom: 11.0px;margin-left: 16.0px;text-align: justify;"><span style="font-size: 16.0px;"><span style="font-family: Arial , Helvetica , sans-serif;"><span style="background-color: white;"><span style="line-height: normal;"><span style="color: rgb(51,52,53);"><a href="https://support.mozilla.org/en-US/kb/clear-your-browsing-history-and-other-personal-data%20" target="_blank" rel="noopener"><span style="color: rgb(5,99,193);">Firefox an Android device</span></a></span></span></span></span></span></li>
        <li style="margin-bottom: 11.0px;margin-left: 16.0px;text-align: justify;"><span style="font-size: 16.0px;"><span style="font-family: Arial , Helvetica , sans-serif;"><span style="background-color: white;"><span style="line-height: normal;"><span style="color: rgb(51,52,53);"><a href="https://support.mozilla.org/en-US/kb/clear-browsing-history-firefox-ios" target="_blank" rel="noopener"><span style="color: rgb(5,99,193);">Firefox on iPhone or iPad</span></a></span></span></span></span></span></li>
    </ol>
    </li>
    <li style="margin-bottom: 11.0px;margin-left: 40.0px;text-align: justify;"><span style="font-size: 16.0px;"><span style="font-family: Arial , Helvetica , sans-serif;"><span style="background-color: white;"><span style="line-height: normal;"><u><span style="color: blue;">Microsoft Internet Explorer and Edge</span></u><span style="color: rgb(51,52,53);"></span></span></span></span></span>
    <ol style="list-style-type: lower-alpha;">
        <li style="margin-bottom: 11.0px;margin-left: 16.0px;text-align: justify;"><span style="font-size: 16.0px;"><span style="font-family: Arial , Helvetica , sans-serif;"><span style="background-color: white;"><span style="line-height: normal;"><span style="color: rgb(51,52,53);"><a href="https://support.microsoft.com/en-us/help/10607/microsoft-edge-view-delete-browser-history" target="_blank" rel="noopener"><span style="color: rgb(5,99,193);">Microsoft Edge (Windows 10)</span></a></span></span></span></span></span></li>
        <li style="margin-bottom: 11.0px;margin-left: 16.0px;text-align: justify;"><span style="font-size: 16.0px;"><span style="font-family: Arial , Helvetica , sans-serif;"><span style="background-color: white;"><span style="line-height: normal;"><span style="color: rgb(51,52,53);"><a href="https://support.microsoft.com/en-us/help/17438/windows-internet-explorer-view-delete-browsing-history#ie=ie-11%20" target="_blank" rel="noopener"><span style="color: rgb(5,99,193);">Internet Explorer 11, 10, 9 and 8</span></a></span></span></span></span></span></li>
    </ol>
    </li>
    <li style="margin-bottom: 11.0px;margin-left: 40.0px;text-align: justify;"><span style="font-size: 16.0px;"><span style="font-family: Arial , Helvetica , sans-serif;"><span style="background-color: white;"><span style="line-height: normal;"><u><span style="color: blue;">Apple Safari</span></u><span style="color: rgb(51,52,53);"></span></span></span></span></span>
    <ol style="list-style-type: lower-alpha;">
        <li style="margin-bottom: 11.0px;margin-left: 16.0px;text-align: justify;"><span style="font-size: 16.0px;"><span style="font-family: Arial , Helvetica , sans-serif;"><span style="background-color: white;"><span style="line-height: normal;"><span style="color: rgb(51,52,53);"><a href="https://support.apple.com/en-ca/guide/safari/clear-your-browsing-history-sfri47acf5d6/mac" target="_blank" rel="noopener"><span style="color: rgb(5,99,193);">Safari on Mac</span></a></span></span></span></span></span></li>
        <li style="margin-bottom: 11.0px;margin-left: 16.0px;text-align: justify;"><span style="font-size: 16.0px;"><span style="font-family: Arial , Helvetica , sans-serif;"><span style="background-color: white;"><span style="line-height: normal;"><span style="color: rgb(51,52,53);"><a href="https://support.apple.com/en-ca/HT201265" target="_blank" rel="noopener"><span style="color: rgb(5,99,193);">Safari on iPhone and iPad</span></a></span></span></span></span></span></li>
    </ol>
    </li>
</ol></div>
                                                        </li>
                        </ul>
                </div>

                <!-- ================= New Customers ================ -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Ask Student Chatbot</h2>
                    </div>
                    
    <div class="chat-container">
      <div class="chat-header">
        Hi, I'm Aziz 👋. Your Student Companion, ask me anything
      </div>
      <div class="chat-messages">
        <!-- Chat messages will be dynamically added here -->
      </div>
      <div class="chat-input">
        <input type="text" class="input-field" placeholder="Type your message...">
        <button class="send-button" onclick="sendMessage()">Send</button>
      </div>
    </div>
    
                    
                </div>
            </div>
        </div>
    </div>

    

  

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>