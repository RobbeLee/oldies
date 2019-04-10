<div id="myModal" style="display:none;">
    <div id="modal" class="form">
        <span class="close">&times;</span>
        <form enctype="multipart/form-data" method="GET" action="<?php if ($subFolder) echo "../"; ?>api/post/makePost.php">
            <h1 class="form__title"> What do you want to post today? </h1>
            <div class="form__content">
                <h2 class="form__content__title"> Content </h2>
                <input type="text" class="form__content__input" placeholder="What are you thinking about?">
            </div>
            <input type="file">
        </form>
    </div>
</div>
<!-- schermvullend, rgba 0,0,0, .4/.6, achtergrond wit -->
<script>
    //new_post
    //ik hoop dat iemand me uit mijn lijden verlost.
    let modal = document.querySelector('#myModal'),
        btn = document.querySelector("#new_post"),
        span = document.querySelector(".close"),
        openModal = false;

    btn.addEventListener('click', () => {
        openModal ? modal.style.display = "none" : modal.style.display = "flex";
        openModal ? openModal = false : openModal = true;
    });
</script> 