

<script>
    $(document).ready(function() {
        <?php if ($this->popup->publicidad_estado == 1) { ?>
            $("#popup").modal("show");
        <?php } ?>

    });
</script>

<?php
echo $this->banner;
?>
<?php
echo $this->contenido;
?>