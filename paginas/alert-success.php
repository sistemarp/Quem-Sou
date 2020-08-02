<style>
    /* Estilização do alert */
    .alert-success {
        display: flex;
        align-items: center;
        justify-content: center;
        color: #285b2a;
        background-color: #dbefdc;
        border-color: #cde9ce;
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

    .alert-link{
        text-decoration: none;
        color: #285b2a;    
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
<div class="alert-success">
    <div class="alert-container">
    
        <div class="alert-icon">
            <i class="material-icons">check</i>
            <p><b>Success Alert:</b> Yuhuuu! You&apos;ve got your $11.99 album from The Weeknd</p>
        </div>
        <a href="" class='alert-link'> <i class="material-icons">clear</i> </a>
    </div>
</div>