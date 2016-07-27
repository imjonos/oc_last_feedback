<?php if ($reviews) { ?>
<?php foreach ($reviews as $review) { ?>

<table class="table table-striped">
  <tr>
    <td><strong><a href ="<?php echo $review['href']; ?>"><?php echo $review['name']; ?></a></strong> </td>
   
  </tr>
 
  <tr>
    <td style="background-color: #fff;">
        
         <strong><?php echo $review['author']; ?></strong>
        
        <p><?php echo $review['text']; ?></p>
        
        
      <?php for ($i = 1; $i <= 5; $i++) { ?>
      <?php if ($review['rating'] < $i) { ?>
      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x" style="color:#ffdf0a;"></i></span>
      <?php } else { ?>
      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x" style="color:#ffdf0a;"></i><i class="fa fa-star-o fa-stack-2x" style="color:#ffdf0a;"></i></span>
      <?php } ?>
      <?php } ?>
    <br>
    <?php echo $review['date_added']; ?>
    </td>
  </tr>
</table>
<?php } ?>
<div class="text-right"><?php //echo $pagination; ?></div>
<?php } else { ?>
<p><?php echo $text_no_reviews; ?></p>
<?php } ?>
