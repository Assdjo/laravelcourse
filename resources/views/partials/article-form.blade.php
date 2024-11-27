<div class="form-group">
        <label for="title">Titre</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title', isset($article->title) ? $article->title : null) }}">
@error('title')
<div>{{$message}}</div>
@enderror
    </div>

    <div class="form-group">
        <label for="body">Contenu de l'article</label>
        <textarea class="form-control" id="body" name="body" rows="5">{{ old('body', isset($article->body)? $article->body : null) }}</textarea>
        @error('body')
        <div>{{$message}}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control" id="image" name="image" accept="images/*">
        @error('image')
        <div>{{$message}}</div>
        @enderror
    </div>
{{--
 <div class="form-group">
        <label for="user_id">Utilisateur</label>
        <select class="form-control" id="user_id" name="user_id">
            <option value="">Aucun utilisateur (facultatif)</option>
            @foreach($users as $user)
                <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
            @endforeach
        </select>
    </div> 
--}}
   

    <button type="submit" class="btn btn-primary">Enregistrer</button>