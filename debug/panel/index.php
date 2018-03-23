<div onclick="return show()" class="debuger">
        <h1 class="debuger__name">debuger</h1>
</div>

<style>
        .debuger{
                border: 2px solid black;
                border-radius: 5px;                
                margin: 0;
                padding: 0;
                width: 100%;
                position: relative;
                height: 10%;
        }

        .debuger__name {
                text-align: center;
                cursor: pointer;
        }

</style>
<script>
function show(){
        var 
                debuger = document.getElementsByClassName("debuger"),
                debuger__name = document.getElementsByClassName("debuger__name");

        debuger[0].style.height = "30%";
        <?php foreach($config as $key => $value): ?>
        document.write("<?= $key . "-" . $value ?>" + "\n");
        <?php endforeach ?>
        return true;
}
</script>
