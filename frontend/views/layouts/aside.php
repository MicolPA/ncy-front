<?php 
$anuncios = \frontend\models\Anuncios::find()->where(['tipo' => 2, 'active' => 1])->limit(3)->all();

 ?>
<div class="row">
	<div class="col-md-12 mb-4">
		<p class="h4 font-weight-bold mb-2">Suscríbete a nustro Canal de Youtube</p>
	    <script src="https://apis.google.com/js/platform.js"></script>
        <div class="g-ytsubscribe" data-channelid="UCv5BIlzG0AmEBQMf__ulM_Q" data-layout="full" data-count="default"></div>
	</div>
	<?php foreach ($anuncios as $anuncio): ?>
		<div class="col-md-12">
	    	<!-- <img src="/frontend/web/images/banner-vertical.png" width="100%"> -->
	    	<img src="http://admin.mastereducativoyalgomas.com/frontend/web/<?= $anuncio->url ?>" width="100%" alt="<?= $anuncio->nombre ?>">
		</div>
	<?php endforeach ?>
</div>