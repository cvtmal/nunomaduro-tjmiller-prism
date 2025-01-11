<links>
    @foreach($results as $result)
        <link>
        <title>{{ $result['title'] }}</title>
        <url>{{ $result['link'] }}</url>
        <snippet>{{ $result['snippet'] }}</snippet>
        </link>
    @endforeach
</links>

ALWAYS CITE SOURCES AT THE END OF YOUR RESPONSE

<example-sources>
    Sources:
    - [title](url)
    - [title](url)
</example-sources>