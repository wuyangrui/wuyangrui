<html>  
    <head>  
        <meta name="layout" content="main">  
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
        <script type="text/javascript" src="/js/jquery.min.js"></script>  
        <script type="text/javascript" src="/js/html2canvas.js"></script> 
        <script type="text/javascript" src="/js/canvas2image.js"></script>   
        <script  type="text/javascript" >  
        $(document).ready( function(){  
                $(".example1").on("click", function(event) {  
                        event.preventDefault();  
                        html2canvas(document.body, {  
                        allowTaint: true,  
                        taintTest: false,  
                        onrendered: function(canvas) {  
                            canvas.id = "mycanvas";  
                            //document.body.appendChild(canvas);  
                            //生成base64图片数据  
                            var dataUrl = canvas.toDataURL();  
                            var newImg = document.createElement("img");  
                            newImg.src =  dataUrl;  
                             $('#ringoImage').attr('src',dataUrl);
                        }  
                    });  
                });

                // $(".downpng").click(function(){
                //     var oCanvas = document.getElementById("thecanvas");

                //     Canvas2Image.saveAsPNG(oCanvas);  // 这将会提示用户保存PNG图片

                //     // Canvas2Image.saveAsJPEG(oCanvas); // 这将会提示用户保存JPG图片

                //     // Canvas2Image.saveAsBMP(oCanvas);  // 这将会提示用户保存BMP图片
                // });  
               
        });  
           
        </script>  
    </head>  

    <body>  
        
   asdfasdfasd
        Hello! 
        Hello! 
        <div class="" style="background-color: #abc;">  
            计算机天堂测试html5页面截图  
            <br>jsjtt.com  
        </div>  
           
        <textArea id="textArea" col="20" rows="10" ></textArea>  
        <input class="example1" type="button" value="button">  
        <a id="tttt"></a>
        <div><a onclick="down()" href="javascript:void(0);">下载图片</div>
        生成界面如下： 
        <img src="" id="ringoImage">
        
    </body>  
    <script>
/**
 * 根据图片生成画布
 */
function convertImageToCanvas(image) {
    var canvas = document.createElement("canvas");
    canvas.width = image.width;
    canvas.height = image.height;
    canvas.getContext("2d").drawImage(image, 0, 0);
    return canvas;
}
/**
 * 下载图片
 */
function down() {
    var sampleImage = document.getElementById("ringoImage"),
    canvas = convertImageToCanvas(sampleImage);
    url = canvas.toDataURL("image/png");//PNG格式
    //以下代码为下载此图片功能
    var triggerDownload = $("#tttt").attr("href", url).attr("download", "order-1111111111.png");
    triggerDownload[0].click();
//    triggerDownload.remove();
}
</script>
</html> 