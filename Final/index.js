function mouseOver(n) {
    return n == 'role' ? document.getElementById('role').innerHTML = 'Character' :
        n == 'story' ? document.getElementById('story').innerHTML = 'Synopsis' :
        n == 'product' ? document.getElementById('product').innerHTML = 'Merchandise' :
        n == 'rolea' ? document.getElementById('rolea').innerHTML = 'Character' :
        n == 'storya' ? document.getElementById('storya').innerHTML = 'Synopsis' :
        document.getElementById('producta').innerHTML = 'Merchandise'
}

function mouseOut(n) {
    return n == 'role' ? document.getElementById('role').innerHTML = '角色介紹' :
        n == 'story' ? document.getElementById('story').innerHTML = '劇情分析' :
        n == 'product' ? document.getElementById('product').innerHTML = '相關週邊' :
        n == 'rolea' ? document.getElementById('rolea').innerHTML = '角色介紹' :
        n == 'storya' ? document.getElementById('storya').innerHTML = '劇情分析' :
        document.getElementById('producta').innerHTML = '相關週邊'
}

$(document).ready(function() {
    $("#zua").click(function() {
        $("#rolecontent").load("role/zu.html")
    })
    $("#china").click(function() {
        $("#chin").toggle(500)
        $("#rolecontent").load("role/chin.html")
    })
    $("#zha").click(function() {
        $("#zh").toggle(500)
        $("#rolecontent").load("role/zh.html")
    })
    $("#suna").click(function() {
        $("#rolecontent").load("role/sun.html")
    })
    $(".zu").click(function() {
        $("#rolecontent").load("role/zu.html")
    })
    $(".chin").click(function() {
        $("#rolecontent").load("role/chin.html")
    })
    $(".zh").click(function() {
        $("#rolecontent").load("role/zh.html")
    })
    $("#s1").click(function() {
        $("#video").attr("src", "https://www.youtube.com/embed/CILQoEXu3SQ")
        $("#videotext").text("")
    })
    $("#s2").click(function() {
        $("#video").attr("src", "https://www.youtube.com/embed/ioJ9vUZ5_C4")
        $("#videotext").text("")
    })
    $("#s3").click(function() {
        $("#video").attr("src", "https://www.youtube.com/embed/g7oocifsYL4")
        $("#videotext").text("")
    })
    $("#s4").click(function() {
        $("#video").attr("src", "https://www.youtube.com/embed/Bp8Pke73aCs")
        $("#videotext").text("")
    })
    $("#s5").click(function() {
        $("#video").attr("src", "https://www.youtube-nocookie.com/embed/pESmhJm67QI")
        $("#videotext").text("有版權問題，請直接至YouTube觀看。")
    })
    $("#s6").click(function() {
        $("#video").attr("src", "https://www.youtube.com/embed/YCtGfefB1Hw")
        $("#videotext").text("")
    })
    $("#s7").click(function() {
        $("#video").attr("src", "https://www.youtube.com/embed/8TS47tvlwuo")
        $("#videotext").text("")
    })
    $(function() {
        $('.menubutton').on('click', function() {
            $(this).toggleClass('active');
            $(".phone").toggle(500);
        })
    })
})