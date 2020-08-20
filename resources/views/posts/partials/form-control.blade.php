<div class="form-group">
    <label for="title">Title</label>
<input type="text" name="title" value="{{ old('title') ?? $post->title }}" id="title" class="form-contol">
    @error('title')

        <div class="text-danger mt-2">
            {{ $message }}
        </div>
        
    @enderror
</div>

<div class="form-group">
    <label for="category">Category</label>
        <select name="category"  id="category" class="form-contol">
                <option disabled selected>Choose One!</option>
            @foreach ($categories as $category)
                <option {{ $category->id == $post->category_id ? 'selected' : '' }} value=" {{ $category->id }} ">{{ $category->name }} </option>
            @endforeach
        </select>
    @error('category')

        <div class="text-danger mt-2">
            {{ $message }}
        </div>
        
    @enderror
</div>

<div class="form-group">
    <label for="tags">Tag</label>
        <select name="tags[]"  id="tags" class="form-contol select2" multiple>
            @foreach ($post->tags as $tag)

             
                <option selected value=" {{ $tag->id }} ">{{ $tag->name }} </option>
            @endforeach
            
            @foreach ($post->tags as $tag)
                <option value=" {{ $tag->id }} ">{{ $tag->name }} </option>
            @endforeach
        </select>
    @error('tags')

        <div class="text-danger mt-2">
            {{ $message }}
        </div>
        
    @enderror
</div>

<div class="form-group">
   <label for="body">Body</label>
<textarea name="body" id="body" class="form-contol">{{ old('body') ?? $post->body }}</textarea>
   @error('body')

    <div class="text-danger mt-2">
        {{ $message }}
    </div>
        
    @enderror
</div>

<button type="submit" class="btn btn-primary">{{ $submit ?? 'Update' }}</button>
