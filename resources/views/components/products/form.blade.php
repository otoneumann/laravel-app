@csrf
<label for="name">Name</label>
<input id="name" name="name" type="text"
       value="{{ old('name', $product->name ?? '') }}">

<label for="description">Description</label>
<input id="description" name="description" type="text"
       value="{{ old('description', $product->description ?? '') }}">

<label for="size">Size</label>
<input id="size" name="size" type="text"
       value="{{ old('size', $product->size ?? '')  }}">

<button>Save</button>
