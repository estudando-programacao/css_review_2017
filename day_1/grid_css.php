<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Testando: Grid CSS</title>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

    <style>

        * {
            font-family: tahoma;
            font-size: 12px;
            transition: 1s;
        }

        body {
            background-color: #ccc;
            max-width: 1200px;
            margin: 0px auto;
        }

        .grid-container {
            display: grid;
            text-align: justify;
            font-weight: bold;
        }

        .grid-container > div {
            border: 1px solid #424242;
            padding: 10px;
        }

        @media screen and (max-width: 500px) {
            .grid-container {
                font-size: 10px;                
                margin: 10px;
                grid-gap: 10px;
                grid-template-columns: auto;
                grid-template-rows: 5% 10% auto 5%;
                grid-template-areas: 
                    "header header header header" 
                    "sidebar sidebar sidebar sidebar"
                    "content content content content" 
                    "footer footer footer footer";
                height: 1000px;
            }
        }

        @media screen and (min-width: 500px) {
            .grid-container {        
                margin: 50px 5px;  
                grid-gap: 10px;
                grid-template-columns: [sidebar] 20% auto;
                grid-template-rows: 15% 60% 20%;
                grid-template-areas: 
                    "header header header header" 
                    "sidebar content content content" 
                    "footer footer footer footer";
                height: auto;
            }
        }        

        .grid-container .grid-header {
            background-color: crimson;
            grid-area: header;
        }

        .grid-container .grid-sidebar {
            background-color: gold;
            grid-area: sidebar;
        }

        .grid-container .grid-content {
            background-color: green;
            grid-area: content;
        }
        
        .grid-container .grid-footer {
            background-color: cornflowerblue;
            grid-area: footer;
        }
    
    </style>

</head>
<body>

    <div class="grid-container">
        <div class="grid-header">header</div>
        <div class="grid-sidebar">sidebar</div>
        <div class="grid-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo maiores doloremque recusandae voluptate pariatur unde, architecto, maxime nesciunt cupiditate natus libero ex fuga nulla neque sit nobis dolore, non porro!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo maiores doloremque recusandae voluptate pariatur unde, architecto, maxime nesciunt cupiditate natus libero ex fuga nulla neque sit nobis dolore, non porro!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo maiores doloremque recusandae voluptate pariatur unde, architecto, maxime nesciunt cupiditate natus libero ex fuga nulla neque sit nobis dolore, non porro!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo maiores doloremque recusandae voluptate pariatur unde, architecto, maxime nesciunt cupiditate natus libero ex fuga nulla neque sit nobis dolore, non porro!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo maiores doloremque recusandae voluptate pariatur unde, architecto, maxime nesciunt cupiditate natus libero ex fuga nulla neque sit nobis dolore, non porro!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo maiores doloremque recusandae voluptate pariatur unde, architecto, maxime nesciunt cupiditate natus libero ex fuga nulla neque sit nobis dolore, non porro!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo maiores doloremque recusandae voluptate pariatur unde, architecto, maxime nesciunt cupiditate natus libero ex fuga nulla neque sit nobis dolore, non porro!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo maiores doloremque recusandae voluptate pariatur unde, architecto, maxime nesciunt cupiditate natus libero ex fuga nulla neque sit nobis dolore, non porro!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo maiores doloremque recusandae voluptate pariatur unde, architecto, maxime nesciunt cupiditate natus libero ex fuga nulla neque sit nobis dolore, non porro!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo maiores doloremque recusandae voluptate pariatur unde, architecto, maxime nesciunt cupiditate natus libero ex fuga nulla neque sit nobis dolore, non porro!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo maiores doloremque recusandae voluptate pariatur unde, architecto, maxime nesciunt cupiditate natus libero ex fuga nulla neque sit nobis dolore, non porro!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo maiores doloremque recusandae voluptate pariatur unde, architecto, maxime nesciunt cupiditate natus libero ex fuga nulla neque sit nobis dolore, non porro!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo maiores doloremque recusandae voluptate pariatur unde, architecto, maxime nesciunt cupiditate natus libero ex fuga nulla neque sit nobis dolore, non porro!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo maiores doloremque recusandae voluptate pariatur unde, architecto, maxime nesciunt cupiditate natus libero ex fuga nulla neque sit nobis dolore, non porro!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo maiores doloremque recusandae voluptate pariatur unde, architecto, maxime nesciunt cupiditate natus libero ex fuga nulla neque sit nobis dolore, non porro!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo maiores doloremque recusandae voluptate pariatur unde, architecto, maxime nesciunt cupiditate natus libero ex fuga nulla neque sit nobis dolore, non porro!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo maiores doloremque recusandae voluptate pariatur unde, architecto, maxime nesciunt cupiditate natus libero ex fuga nulla neque sit nobis dolore, non porro!</div>
        <div class="grid-footer">footer</div>
    </div>

    <!-- <div class="grid-container">
        <div class="one">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa unde quisquam a voluptatum quod praesentium mollitia quidem itaque, nam quaerat amet, expedita saepe laborum accusamus totam adipisci quae nemo? Error!</div>
        <div class="two">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae excepturi placeat facilis minus velit debitis tempora. Quas, quis, sunt odit optio sint aspernatur et enim alias unde voluptates iure vel.</div>
        <div class="thre">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero, ipsam vitae dolore error quidem ad sunt amet quasi accusamus architecto necessitatibus alias, consectetur fuga corporis nesciunt! Aut distinctio praesentium illo!</div>
        <div class="four">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit aspernatur numquam aperiam officia repudiandae facilis nemo odit saepe quae suscipit autem, fugiat a quam harum eum voluptate? Error, deleniti natus.</div>
        <div class="five">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis architecto, cum distinctio quae harum, voluptatem quasi recusandae reprehenderit hic maxime eius odio assumenda nobis. Voluptate quidem quos suscipit magnam laborum?</div>
        <div class="six">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, est. Veritatis temporibus ad ab non dicta mollitia perspiciatis harum exercitationem accusantium et minima, iste ratione, adipisci doloremque praesentium expedita assumenda!</div>
        <div class="seven">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, est. Veritatis temporibus ad ab non dicta mollitia perspiciatis harum exercitationem accusantium et minima, iste ratione, adipisci doloremque praesentium expedita assumenda!</div>
        <div class="eight">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, est. Veritatis temporibus ad ab non dicta mollitia perspiciatis harum exercitationem accusantium et minima, iste ratione, adipisci doloremque praesentium expedita assumenda!</div>
        <div class="nine">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, est. Veritatis temporibus ad ab non dicta mollitia perspiciatis harum exercitationem accusantium et minima, iste ratione, adipisci doloremque praesentium expedita assumenda!</div>
        <div class="ten">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, est. Veritatis temporibus ad ab non dicta mollitia perspiciatis harum exercitationem accusantium et minima, iste ratione, adipisci doloremque praesentium expedita assumenda!</div>
    </div> -->
    
    <script>
        
        $(function() {
            // $('.grid-container > div').css('background-color', 'cornflowerblue');
        });
    
    </script>

</body>
</html>