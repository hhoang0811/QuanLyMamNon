<script>
        const itemsliderbar = document.querySelectorAll(".admin-content-left-li");
		itemsliderbar.forEach(function(menu,index){
        menu.addEventListener("click",function(){
            menu.classList.toggle("block")
        })
    })
</script>