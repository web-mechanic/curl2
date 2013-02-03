<div id="lister">

<?php include_once('urlpicker.php'); ?>

<ol>
        <?php echo form_open('urlfinder/lister'); ?>
                <?php foreach ($liens as $lien): ?>
                    <li>
                        <input type="hidden" name="id" value="<?php echo $lien->id ?>" />
                        <input type="hidden" name="url" value="<?php echo $lien->url ?>" />
                        <input type="hidden" name="img" value="<?php echo $lien->src ?>" />
                        <input type="hidden" name="desc" value="<?php echo $lien->desc ?>" />
                        <input type="hidden" name="title" value="<?php echo $lien->title ?>" />
                        <h3>
                            <?php echo $lien->title ?>
                        </h3>
                        <p class="lien"> <?php echo anchor(prep_url($lien->url)) ?></p>
                       <div class="imgList"> <?php  echo '<img src="' . $lien->src . '" />' ?> </div>
                        <p><?php echo $lien->desc ?></p>

                        <div class="supmod">
                        <?php echo anchor('urlfinder/supprimer/'.$lien->id, 'Supprimer', array('title'=>'Supprimer ce message','class'=>'delete')) ?>
                        <?php echo anchor('urlfinder/preview/'.$lien->id, 'Modifier', array('title'=>'Modifier ce message')) ?>
                        </div>
                    </li>
                <?php endforeach; ?>
        </form> 
</ol>
</div>