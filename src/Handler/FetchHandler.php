<?php namespace Mobileia\Metatags\Handler;

/**
 * Description of SubscribeHandler
 *
 * @author matiascamiletti
 */
class FetchHandler extends \Mobileia\Expressive\Auth\Request\MiaAuthRequestHandler
{
    public function handle(\Psr\Http\Message\ServerRequestInterface $request): \Psr\Http\Message\ResponseInterface
    {
        $slug = $this->getParam($request, 'slug', '');
        $page = \Mobileia\Metatags\Model\Pagetag::where('pagekey', $slug)->first();
        if($page === null){
            return new \Mobileia\Expressive\Diactoros\MiaJsonErrorResponse(-1, 'No existe la pagina.');
        }
        // Devolvemos respuesta
        return new \Mobileia\Expressive\Diactoros\MiaJsonResponse($page->toArray());
    }
}
