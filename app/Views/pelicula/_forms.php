<label for="titulo">Titulo</label>
<input type="text" name="titulo" id="titulo" placeholder="Titulo" value="<?= $pelicula['titulo'] ?>">
<label for="descripcion">Descripcion</label>
<textarea name="descripcion" id="descripcion" placeholder="Descripcion"><?= $pelicula['descripcion'] ?></textarea>
<button type="submit"><?= $op ?></button>