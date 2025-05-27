                    </td>
                    <td>
                        <a href="{{ route('admin.pengumuman.edit', $item->id_pengumuman) }}" class="btn btn-sm btn-warning mb-2">Edit</a>
                        <form action="{{ route('admin.pengumuman.destroy', $item->id_pengumuman) }}" method="POST" class="form-hapus">
                            @csrf
                            @method('DELETE')
                    </td> 