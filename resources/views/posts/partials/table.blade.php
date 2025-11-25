@forelse($posts as $post)
<tr>
    <td>{{ $post->id }}</td>
    <td>{{ $post->title }}</td>
    <td>{{ $post->body }}</td>
</tr>
@empty
<tr>
    <td colspan="5">There are no posts.</td>
</tr>
@endforelse
