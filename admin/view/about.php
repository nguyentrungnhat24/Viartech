<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Admin Dashboard | By Code Info</title>
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

</head>
<style>
    input[type=text],
    input[type=number],
    input[type=file],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    /* Set a style for all buttons */
    button {
        background-color: #04AA6D;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        /* width: 100%; */
    }

    button:hover {
        opacity: 0.8;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }

    /* Center the image and position the close button */
    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        position: relative;
    }



    .container {
        padding: 16px;
    }

    span.psw {
        float: right;
        padding-top: 16px;
    }

    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        left: 0;
        top: 0;
        width: 100px;
        /* Full width */
        height: 100px;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
        padding-top: 60px;
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 5% auto 15% auto;
        /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 80%;
        /* Could be more or less, depending on screen size */
    }

    /* The Close Button (x) */
    .close {
        position: absolute;
        right: 25px;
        top: 0;
        color: #000;
        font-size: 35px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: red;
        cursor: pointer;
    }

    /* Add Zoom Animation */
    .animate {
        -webkit-animation: animatezoom 0.6s;
        animation: animatezoom 0.6s
    }

    @-webkit-keyframes animatezoom {
        from {
            -webkit-transform: scale(0)
        }

        to {
            -webkit-transform: scale(1)
        }
    }

    @keyframes animatezoom {
        from {
            transform: scale(0)
        }

        to {
            transform: scale(1)
        }
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }

        .cancelbtn {
            width: 100%;
        }
    }

    /*  import google fonts */
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

    * {
        margin: 0;
        padding: 0;
        border: none;
        outline: none;
        text-decoration: none;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    body {
        background: rgb(219, 219, 219);
    }

    .header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 60px;
        padding: 20px;
        background: #fff;
    }

    .logo {
        display: flex;
        align-items: center;
    }

    .logo a {
        color: #000;
        font-size: 18px;
        font-weight: 600;
        margin: 2rem 8rem 2rem 2rem;
    }

    .search_box {
        display: flex;
        align-items: center;
    }

    .search_box input {
        padding: 9px;
        width: 250px;
        background: rgb(228, 228, 228);
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
    }

    .search_box i {
        padding: 14px;
        cursor: pointer;
        color: #fff;
        background: #000;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
    }

    .header-icons {
        display: flex;
        align-items: center;
    }

    .header-icons i {
        margin-right: 2rem;
        cursor: pointer;
    }

    .header-icons .account {
        width: 130px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .header-icons .account img {
        width: 50px;
        height: 50px;
        cursor: pointer;
        border-radius: 50%;
    }

    .container1 {
        margin-top: 10px;
        display: flex;
        justify-content: space-between;
    }

    /* Side menubar section */
    nav {
        background: #fff;
    }

    .side_navbar {
        padding: 1px;
        display: flex;
        flex-direction: column;
    }

    .side_navbar span {
        text-align: center;
        font-weight: bold;
        color: gray;
        margin: 1rem 1.5rem;
        font-size: 15px;
    }

    .side_navbar a {
        width: 100%;
        padding: 0.8rem 3rem;
        font-weight: 500;
        font-size: 15px;
        color: rgb(100, 100, 100);
    }

    .links {
        margin-top: 5rem;
        display: flex;
        flex-direction: column;
    }

    .links a {
        font-size: 13px;
    }

    .side_navbar a:hover {
        background: rgb(235, 235, 235);
    }

    .side_navbar .active {
        border-left: 2px solid rgb(100, 100, 100);
    }

    /* Main Body Section */
    .main-body {
        width: 100%;
        padding: 1rem;
    }

    .promo_card {
        width: 100%;
        color: #fff;
        margin-top: 10px;
        border-radius: 8px;
        padding: 0.5rem 1rem 1rem 3rem;
        background: rgb(37, 37, 37);
    }

    .promo_card h1,
    .promo_card span,
    button {
        margin: 10px;
    }

    .row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 1rem 0;
    }

    table {

        width: 100%;
        background: #fff;
        padding: 1rem;

        border-radius: 10px;
    }

    table td,
    th {
        padding: 10px 15px;
    }

    table th {
        text-align: center;
        background: #34AF6D;
        font-size: 15px;
    }

    table th:first-child {
        border-top-left-radius: 10px;

    }

    table th:last-child {
        border-top-right-radius: 10px;
    }

    table td {
        font-size: 13px;
        color: rgb(100, 100, 100);
    }
</style>

<body>
    <div id="id01" class="modal" style="width: 100%;height:100%">
        <form style="width:800px;margin-left:300px;background:white;padding:10px" action="controllers.php?act=baiviet_add" method="post" enctype="multipart/form-data">

            <div class="container ">
                <h5 style="color:blue">*Quản lí bài viết:</h5>

                <label for="psw"><b>Hình ảnh</b></label>
                <input type="file" name="image">
    
                <label for="psw"><b>Mô tả</b></label>
                <textarea  id="editor_gioithieu" name="mota" id="" rows="10" class="form-control"></textarea>
            </div>
            <div class="container" style="background-color:#f1f1f1">
                <input class="btn btn-success p-2 mb-2" type="submit" name="themmoibaiviet" value="Thêm"/>
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Thoát</button>

            </div>
        </form>
    </div>
    <div id="id02" class="modal" style="width: 100%;height:100%">
        <form style="width:800px;margin-left:300px;background:white;padding:10px" action="controllers.php?act=header_add" method="post" enctype="multipart/form-data">

            <div class="container ">
                <h5 style="color:blue">Quản lí slide header</h5>

                <label ><b>Tiêu đề</b></label>
                <input type="text" name="tieude" required>
    
                <label ><b>Mô tả</b></label>
                <textarea  id="editor_header" name="mota" id="" rows="10" class="form-control"></textarea>

            </div>
            <div class="container" style="background-color:#f1f1f1">
                <input class="btn btn-success p-2 mb-2" type="submit" name="themmoiheader" value="Thêm"/>
                <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Thoát</button>

            </div>
        </form>
    </div>
    <div id="id03" class="modal" style="width: 100%;height:100%">
        <form style="width:800px;margin-left:300px;background:white;padding:10px" action="controllers.php?act=slidebody_add" method="post" enctype="multipart/form-data">

            <div class="container ">
                <h5 style="color:blue">Quản lí slide body</h5>
                <label ><b>Hình ảnh</b></label>
                <input type="file" name="image">

                <label ><b>Tiêu đề</b></label>
                <input type="text" name="tieude" required>
    
                <label ><b>Mô tả</b></label>
                <textarea  id="editor_slidebody" name="mota" id="" rows="10" class="form-control"></textarea>

            </div>
            <div class="container" style="background-color:#f1f1f1">
                <input class="btn btn-success p-2 mb-2" type="submit" name="themmoislidebody" value="Thêm"/>
                <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Thoát</button>

            </div>
        </form>
    </div>




    <div class="container1">

        <div class="main-body">


            <div class="list1 col-md-12 col-sm-12">
            <h4>QUẢN LÍ BÀI VIẾT</h4>
                <div class="d-flex">
                   
                    <div>
                    <button 
                    style=" display: block;
                       padding: 6px 12px;
                      border-radius: 5px;
                      cursor: pointer;width:150px"
                       onclick="document.getElementById('id01').style.display='block'">Viết bài giới thiệu</button>
                    </div>
                    <div>
                    <button style=" display: block;padding: 6px 12px;border-radius: 5px;cursor: pointer;width:150px" 
                    onclick="document.getElementById('id02').style.display='block'">Viết slide header</button>
                    </div>  
                    <div>
                    <button style=" display: block;padding: 6px 12px;border-radius: 5px;cursor: pointer;width:150px" 
                    onclick="document.getElementById('id03').style.display='block'">Viết slide body</button>
                    </div>                 
  
                </div>
                <table>
                <h3 class="text-center mt-3 ">Giới thiệu</h3>
                    <thead>
                    
                        <tr>
                       
                            <th>Ảnh</th>
                            <th>Mô tả</th>
                            <th colspan="2"> Hành động</th>
                
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        showpro2($dskh);
                        ?>

                    </tbody>
                </table>
                <div style="height: 70px;"></div>
                <table>
                <h3 class="text-center mt-3">SlideHeader</h3>
                    <thead>
                        <tr>
                           
                            <th>Tiêu đề</th>
                            <th>Mô tả</th>
                            <th colspan="2"> Hành động</th>
                
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        show_slideheader($dssh);
                        ?>

                    </tbody>
                </table>
                <div style="height: 100px;"></div>
                <table>
                <h3 class="text-center mt-3">SlideBody</h3>
                    <thead>
                        <tr>
                            <th>Hình ảnh</th> 
                            <th>Tiêu đề</th>
                            <th>Mô tả</th>
                            <th colspan="2"> Hành động</th>
                
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        show_slidebody($dssb);
                        ?>

                    </tbody>
                </table>
            </div>
        </div>


    </div>
</body>

</html>