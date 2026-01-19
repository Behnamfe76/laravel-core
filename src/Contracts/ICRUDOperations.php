<?php

namespace Fereydooni\LaravelCore\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\CursorPaginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

interface ICRUDOperations
{
    /**
     * @param int $perPage
     * @param string|null $driver
     * @return LengthAwarePaginator
     */
    public function paginate(int $perPage = 15, ?string $driver = null): LengthAwarePaginator;

    /**
     * @param int $perPage
     * @param string|null $driver
     * @return Paginator
     */
    public function simplePaginate(int $perPage = 15, ?string $driver = null): Paginator;

    /**
     * @param int $perPage
     * @param string|null $cursor
     * @param string|null $driver
     * @return CursorPaginator
     */
    public function cursorPaginate(int $perPage = 15, ?string $cursor = null, ?string $driver = null): CursorPaginator;

    /**
     * @param int $perPage
     * @param string|null $cursor
     * @return CursorPaginator
     */
    public function cursorAll(int $perPage = 15, ?string $cursor = null): CursorPaginator;

    /**
     * @param int $id
     * @return Model|null
     */
    public function find(int $id): ?Model;

    /**
     * @param array $data
     * @return Model
     */
    public function create(array $data): Model;

    /**
     * @param Model $model
     * @param array $data
     * @return bool
     */
    public function update(Model $model, array $data): bool;

    /**
     * @param Model $model
     * @return bool
     */
    public function delete(Model $model): bool;

    /**
     * @param array $updates
     * @return bool
     */
    public function bulkUpdate(array $updates): bool;

    /**
     * @param array $ids
     * @return bool
     */
    public function deleteSome(array $ids): bool;

    /**
     * @return bool
     */
    public function deleteAll(): bool;
}
