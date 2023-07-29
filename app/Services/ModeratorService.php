<?php


namespace App\Services;
use App\Traits\FileTrait;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use App\Enums\UserRoleEnum;

class ModeratorService {
    use FileTrait;
    public function __construct(protected User $moderator) {
        $this->moderator = $this->moderator->where('role', UserRoleEnum::SUB_ADMIN);
    }

    public function getAllCategories() : array|Collection {
        return $this->moderator->orderBy('name')->get();
    }

    public function addModerator($data) : User {
        $data['image'] = $this->uploadFile('images/moderators/',$data['image']);
        $data['added_by'] = auth()->id();
        return $this->moderator->create($data);
    }

    public function getModerator($moderator) : User {
        return $moderator->load('products');
    }

    public function deleteModerator($moderator) : bool {
        return $moderator->delete();
    }
}
