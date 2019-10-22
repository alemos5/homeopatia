<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\productos;

class productosApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_productos()
    {
        $productos = factory(productos::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/productos', $productos
        );

        $this->assertApiResponse($productos);
    }

    /**
     * @test
     */
    public function test_read_productos()
    {
        $productos = factory(productos::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/productos/'.$productos->id
        );

        $this->assertApiResponse($productos->toArray());
    }

    /**
     * @test
     */
    public function test_update_productos()
    {
        $productos = factory(productos::class)->create();
        $editedproductos = factory(productos::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/productos/'.$productos->id,
            $editedproductos
        );

        $this->assertApiResponse($editedproductos);
    }

    /**
     * @test
     */
    public function test_delete_productos()
    {
        $productos = factory(productos::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/productos/'.$productos->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/productos/'.$productos->id
        );

        $this->response->assertStatus(404);
    }
}
