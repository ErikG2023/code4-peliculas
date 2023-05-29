<label for="titulo">Titulo</label>
<input type="text" name="titulo" id="titulo" placeholder="Titulo" value="<?= old('titulo',$pelicula->titulo) ?>">
<label for="descripcion">Descripcion</label>
<textarea name="descripcion" id="descripcion" placeholder="Descripcion"><?= old('descripcion',$pelicula->descripcion) ?></textarea>
<button type="submit"><?= $op ?></button>