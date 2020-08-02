<style>
    /* Estilização do alert */
    .alert-danger {
        display: flex;
        align-items: center;
        justify-content: center;
        color: #7f231c;
        background-color: #fdd9d7;
        border-color: #fccac7;
        width: 100%;
        height: 35px;
    }

    .alert-container{
        display: flex;
        align-items: center;
        width: 80%;
        height: 35px;
        margin: auto;
    }

    .alert-link-danger{
        text-decoration: none;
        color: #7f231c;    
    }

    .alert-icon{
        display: flex;
        align-items: center;
        width: 90%;    
    }.alert-icon i{
        margin-right: 10px;
    }

</style>

<!-- Html do alert -->
<div class="alert-danger">
    <div class="alert-container">
    
        <div class="alert-icon">
            <i class="material-icons">warning</i>
            <p><b>Error Alert:</b> Yuhuuu! You&apos;ve got your $11.99 album from The Weeknd</p>
        </div>
        <a href="" class='alert-link-danger'> <i class="material-icons">clear</i> </a>
    </div>
</div>