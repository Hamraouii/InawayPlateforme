<?php
namespace App\Security;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Http\Authorization\AccessDeniedHandlerInterface;

class AccessDeniedHandler implements AccessDeniedHandlerInterface
{
    public function handle(Request $request, AccessDeniedException $accessDeniedException): ?Response{
        $content = '<h1 style="color:red; text-align:center; font-size:80px;">Oops! Vous n\'êtes pas autorisé à accéder à cette page. </h1>';

        return new Response($content, 403);
    }
}
