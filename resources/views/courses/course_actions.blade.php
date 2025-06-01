<div class="inline-block px-3 py-1 bg-green-100 text-green-700 rounded hover:bg-green-200 transition ms-2">
    <a href="{{ route('courses.edit', $course->id) }}">Edit</a>
</div>
<form action="{{ route('courses.destroy', $course->id) }}" method="POST" class="inline-block ms-2" onsubmit="return confirm('Are you sure you want to delete this course?');">
    @csrf
    @method('DELETE')
    <button type="submit" class="px-3 py-1 bg-red-100 text-red-700 rounded hover:bg-red-200 transition">Delete</button>
</form>
