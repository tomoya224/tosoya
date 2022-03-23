<?php 
/**
 * Template Name:page-c
 */ 
?>
<?php echo get_header(); ?>

<div class="contact">
    <h1>お問い合わせ</h1>
</div>
<div class="contact-from">
    <form>
        <div class="input_title">
            <h4>お名前</h4>
        </div>
        <div class="form-row">
           <div class="col-md-3 mb-3">
               <input type="text" class="form-control" placeholder="山田" required>
           </div>
           <div class="col-md-3 mb-3">
             <input type="text" class="form-control" placeholder="太郎" required>
           </div>
        </div>    
        <div class="input_title">
            <h4>E-mail</h4>
        </div>
        <div class="form-row">
            <dic class="col-md-6">
                <input type="text" class="form-control" placeholder="example@sejuku.net">
            </div>
        </div>
        <div class="input_title">
            <h4>題名</h4>
        </div>
        <div class="form-row">
            <div class="col-md-12">
                <input type="text" class="form-control" placeholder="見積依頼について" required>
            </div>
        </div>
        <div class="input_title">
            <h4>メッセージ本文</h4>
        </div>
        <div class="form-row">
            <div class="col-md-12">
                <textarea class="form-control" rows="5" placeholder="見積依頼について聞きたいです。" required>
            </div>
        </div>
        <div class="text-right">
            <button class="btn submit_form">送信</button>
        </div>
    </form>
</div>
<?php echo get_footer(); ?>