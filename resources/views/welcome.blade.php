<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>lab1</title>

        <style>
            body {
                flex-direction: column;
                display: flex;
                font-family: 'Nunito';
                margin: 0;
                padding: 0;
                letter-spacing: 1px;
                justify-content: space-between;
                min-height: 100vh;
                background-color:#FAEBD7;
                color:#5F9EA0;
            }
            .footer {
                width: 100%;
                height:100px;
                display: flex;
                justify-content: center;
                ALIGN-CONTENT: center;
                align-items: center;
                color:blue;
                background-color:#fadad7;
                margin-top:40px;
            }
            .title {
                display: flex;
                justify-content: center;
                ALIGN-CONTENT: center;
                align-items: center;
                width:100%;
            }
            .main-content {
                width:100%;
                display: flex;
                justify-content: center;
                ALIGN-CONTENT: center;
                align-items: center;
            }
            .text {
                padding:0 16px;
                border-left: 6px solid #7B8898;
                width:60%;
                color: #7B8898;
                font-size: 1.1875em;
                font-weight: 400;
                font-style: normal;
                font-family: "Mercury SSm A", "Mercury SSm B", Georgia, Times, "Times New Roman", "Microsoft YaHei New", "Microsoft Yahei", "微软雅黑", 宋体, SimSun, STXihei, "华文细黑", serif;
                line-height: 1.5;
                animation: fadeInLorem 1000ms linear
            }
.header{
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size:24px;
}
            
        </style>
    </head>
    <body>
       <div style="height: 60px;width: 100%;display: flex;justify-content: center;align-items: center;align-content:center;margin-bottom:20px;border-bottom: 1px solid #d4d2d2;text-align:center;">
       <div class ="header">
<div><a href="sait.html">Главная страница </a></div>
				<div class="hd"><a href="information.html">О компании</a></div>
				<div><a href="money.html">Наши услуги</a></div>
				<div><a href="contacts.html">Контакты</a></div>
                 </div>
       </div> 
       </div>

       <div class="content">
            <h1 class="title">{{$page->caption}}</h1>
            <div class="main-content">
            <?php echo($page->content) ?>
            </div>
       </div>

        <div class="footer">
        <marquee width = "660",height="400",hspace ="60",vspace="30",bgcolor="yellow",loop="6",direction="right",behavior="scroll",scrollamount="25">  Звоните по номеру 38 (067) 608-58-38 </marquee>
        </div>
    </body>
</html>
