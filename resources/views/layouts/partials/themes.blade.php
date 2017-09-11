@auth
    @foreach( DB::table('themes')->get() as $theme )
        @if( $theme->fileName == Auth::user()->theme )
            <option value="{{ $theme->fileName }}" selected="selected">
                {{ $theme->themeName }}
            </option>
        @else
            <option value="{{ $theme->fileName }}">{{ $theme->themeName }}</option>
        @endif
    @endforeach
@endauth