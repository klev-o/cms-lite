<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="title"><span>Настройка сайта</span></h1>
            </div>
        </div>
        <div class="row">
            <div class="cl-tab-container">
                <div class="col-md-3">
                    <ul class="cl-tab-nav">
                        <li class="active"><a data-toggle="tab" href="#panel1"><i class="fal fa-home"></i><span>Главное</span></a></li>
                        <li><a data-toggle="tab" href="#panel2"><i class="fal fa-users-cog"></i><span>Мета-теги</span></a></li>
                        <li><a data-toggle="tab" href="#panel6"><i class="fal fa-share-square"></i><span>Open Graph</span></a></li>
                        <li><a data-toggle="tab" href="#panel3"><i class="fal fa-chart-bar"></i><span>Метрики</span></a></li>
                        <li><a data-toggle="tab" href="#panel4"><i class="fal fa-star"></i><span>Favicon</span></a></li>
                        <li><a data-toggle="tab" href="#panel5"><i class="fal fa-robot"></i><span>Robots.txt</span></a></li>
                    </ul>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div id="panel1" class="tab-pane fade in active">
                            <form id="main-form" action="action.php" method="post">
                                <div class="cl-form-group">
                                    <label class="cl-label" for="title">Название сайта</label>
                                    <input type="text" placeholder="example: My Awesome Site" class="cl-input" name="title" id="title" value="<?=$cms->get('title')?>">
                                </div>
                                <div class="cl-form-group">
                                    <label class="cl-label" for="phone">Номер телефона</label>
                                    <input type="text" placeholder="example: 8(888)888-88-88" class="cl-input" name="phone" id="phone" value="<?=$cms->get('phone')?>">
                                </div>
                                <div class="cl-form-group">
                                    <label class="cl-label" for="email">E-mail адрес для получения уведомлений с сайта</label>
                                    <input type="text" placeholder="example: my_email@mail.ru" class="cl-input" name="email" id="email" value="<?=$cms->get('email')?>">
                                </div>
                                <button type="button" class="btn btn-main" onclick="saveMainTab();">Сохранить</button>
                            </form>
                        </div>
                        <div id="panel2" class="tab-pane fade">
                            <form id="meta-tag-form" action="action.php" method="post">
                                <div class="row">
                                    <div class="col-md-5"><label class="cl-label" for="">Название мета-тега</label></div>
                                    <div class="col-md-5"><label class="cl-label" for="">Значение мета-тега</label></div>
                                </div>
                                <div class="block-meta">
                                    <?php if ($cms->getMetaTags()) { ?>
                                        <?php foreach ($cms->getMetaTags() as $metaName => $metaVal) { ?>
                                            <div class="block-meta-item">
                                                <div class="row">
                                                    <input type="hidden" name="type" value="meta_tags">
                                                    <div class="col-md-5">
                                                        <div class="cl-form-group">
                                                            <input type="text" placeholder="example: charset" class="cl-input" name="name" value="<?=$metaName?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="cl-form-group">
                                                            <input type="text" placeholder="example: UTF-8" class="cl-input" name="value" value="<?=$metaVal?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <a href="#" class="meta-times" onclick="removeMetaBlock(this);"><i class="fal fa-times-circle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <div class="block-meta-item">
                                            <div class="row">
                                                <input type="hidden" name="type" value="meta_tags">
                                                <div class="col-md-5">
                                                    <div class="cl-form-group">
                                                        <input type="text" placeholder="example: charset" class="cl-input" name="name">
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="cl-form-group">
                                                        <input type="text" placeholder="example: UTF-8" class="cl-input" name="value">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <a href="#" class="meta-times" onclick="removeMetaBlock(this);"><i class="fal fa-times-circle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }  ?>
                                </div>

                                <div class="row">
                                    <div class="col-md-10 text-center">
                                        <a href="#" class="meta-plus" onclick="addMetaBlock(this, 'meta_tags');"><i class="fal fa-plus-circle"></i></a>
                                    </div>
                                </div>

                                <button type="button" class="btn btn-main" onclick="saveMetaTagTab();">Сохранить</button>
                                <button type="button" class="btn btn-default launch-demo-meta-tag">Демо</button>
                            </form>
                        </div>
                        <div id="panel3" class="tab-pane fade">
                            <h2>Метрики</h2>
                        </div>
                        <div id="panel4" class="tab-pane fade">
                            <h2>Favicon</h2>
                        </div>
                        <div id="panel5" class="tab-pane fade">
                            <h2>Robots.txt</h2>
                        </div>
                        <div id="panel6" class="tab-pane fade">
                            <form id="og-tag-form" action="action.php" method="post">
                                <div class="row">
                                    <div class="col-md-5"><label class="cl-label" for="">Название мета-тега</label></div>
                                    <div class="col-md-5"><label class="cl-label" for="">Значение мета-тега</label></div>
                                </div>
                                <div class="block-meta">
                                    <?php if ($cms->getOGTags()) { ?>
                                        <?php foreach ($cms->getOGTags() as $metaName => $metaVal) { ?>
                                            <div class="block-meta-item">
                                                <div class="row">
                                                    <input type="hidden" name="type" value="og_tags">
                                                    <div class="col-md-5">
                                                        <div class="cl-form-group">
                                                            <input type="text" placeholder="example: charset" class="cl-input" name="name" value="<?=$metaName?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="cl-form-group">
                                                            <input type="text" placeholder="example: UTF-8" class="cl-input" name="value" value="<?=$metaVal?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <a href="#" class="meta-times" onclick="removeMetaBlock(this);"><i class="fal fa-times-circle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <div class="block-meta-item">
                                            <div class="row">
                                                <input type="hidden" name="type" value="og_tags">
                                                <div class="col-md-5">
                                                    <div class="cl-form-group">
                                                        <input type="text" placeholder="example: og:title" class="cl-input" name="name">
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="cl-form-group">
                                                        <input type="text" placeholder="example: The Rock" class="cl-input" name="value">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <a href="#" class="meta-times" onclick="removeMetaBlock(this);"><i class="fal fa-times-circle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }  ?>
                                </div>

                                <div class="row">
                                    <div class="col-md-10 text-center">
                                        <a href="#" class="meta-plus" onclick="addMetaBlock(this, 'og_tags');"><i class="fal fa-plus-circle"></i></a>
                                    </div>
                                </div>

                                <button type="button" class="btn btn-main" onclick="saveOGTagTab();">Сохранить</button>
                                <button type="button" class="btn btn-default launch-demo-og-tag">Демо</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>