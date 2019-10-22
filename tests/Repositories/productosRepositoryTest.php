<?php namespace Tests\Repositories;

use App\Models\productos;
use App\Repositories\productosRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class productosRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var productosRepository
     */
    protected $productosRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->productosRepo = \App::make(productosRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_productos()
    {
        $productos = factory(productos::class)->make()->toArray();

        $createdproductos = $this->productosRepo->create($productos);

        $createdproductos = $createdproductos->toArray();
        $this->assertArrayHasKey('id', $createdproductos);
        $this->assertNotNull($createdproductos['id'], 'Created productos must have id specified');
        $this->assertNotNull(productos::find($createdproductos['id']), 'productos with given id must be in DB');
        $this->assertModelData($productos, $createdproductos);
    }

    /**
     * @test read
     */
    public function test_read_productos()
    {
        $productos = factory(productos::class)->create();

        $dbproductos = $this->productosRepo->find($productos->id);

        $dbproductos = $dbproductos->toArray();
        $this->assertModelData($productos->toArray(), $dbproductos);
    }

    /**
     * @test update
     */
    public function test_update_productos()
    {
        $productos = factory(productos::class)->create();
        $fakeproductos = factory(productos::class)->make()->toArray();

        $updatedproductos = $this->productosRepo->update($fakeproductos, $productos->id);

        $this->assertModelData($fakeproductos, $updatedproductos->toArray());
        $dbproductos = $this->productosRepo->find($productos->id);
        $this->assertModelData($fakeproductos, $dbproductos->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_productos()
    {
        $productos = factory(productos::class)->create();

        $resp = $this->productosRepo->delete($productos->id);

        $this->assertTrue($resp);
        $this->assertNull(productos::find($productos->id), 'productos should not exist in DB');
    }
}
