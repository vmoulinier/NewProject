<form method="POST" action="userpics" enctype="multipart/form-data" xmlns="http://www.w3.org/1999/html">
    <div class="form-group">
        <!-- On limite le fichier à 100Ko -->
        <input type="hidden" name="MAX_FILE_SIZE" value="100000">
        <input id ="InputFile" type="file" name="avatar" class="filestyle" data-input="false">
        <p class="help-block">Taille maximale : 100ko</p>
    </div>
    <div class="form-group">
        <button class="btn btn-default type="submit" name="envoyer">Envoyer le fichier</button>
    </div>
</form>