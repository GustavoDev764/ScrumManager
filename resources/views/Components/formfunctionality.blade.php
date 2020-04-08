  <div class="form-group">
    <label for="name">Nome:</label>
    <input type="text" value="{{ $res->name ?? '' }}" class="form-control" id="name" placeholder="Digite o Nome" name="name">
  </div>

  <div class="form-group">
    <label for="description">Descrição:</label>
    <textarea name="description" class="form-control" rows="5" id="description">
        {{ $res->description ?? '' }}
    </textarea>
  </div>

  <div class="form-group">
    <label for="id_priority">Prioridade:</label>
    <select name="id_priority" class="form-control" id="id_priority">
      @foreach ($priority as $item)
        @if ($res != null && $res->id_priority == $item->id )
            <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
        @else
            <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endif        
      @endforeach
    </select>
  </div>

  <div class="form-group">
    <label for="id_status">Status:</label>
    <select name="id_status" class="form-control" id="id_status">
      @foreach ($status as $item)
        @if ($res != null && $res->id_status == $item->id)
            <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
        @else
            <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endif         
      @endforeach
    </select>
  </div>