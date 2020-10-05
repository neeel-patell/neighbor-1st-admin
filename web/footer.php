<footer class="container-fluid p-4 mb-0 bg-primary" style="min-height: 10vh;">
    <h5 class="text-right"><i class="fas fa-copyright"></i> Lampros Tech</h5>
</footer>
<script src="../resources/js/font-awesome.js"></script>
<script src="../resources/js/jquery.min.js"></script>
<script src="../resources/js/popper.min.js"></script>
<script src="../resources/js/bootstrap.js"></script>

<script type="text/javascript">
    $("#toggler").click(function(){
        if($("#content").attr('class') == "col-xl-10 col-8"){
            $("#toggler").html('<i class="fas fa-arrow-right"></i>');
            $("#content").attr('class','col-xl-12 col-12');
            $("#side").attr('class','col-xl-0 col-0 d-none');
        }
        else{
            $("#toggler").html('<i class="fas fa-arrow-left"></i>');
            $("#content").attr('class','col-xl-10 col-8');
            $("#side").attr('class','col-xl-2 col-4 d-block');
        }
    });
</script>