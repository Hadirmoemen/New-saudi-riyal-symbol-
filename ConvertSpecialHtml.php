<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ConvertSpecialHtml
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // نتحقق أن المحتوى HTML
        if ($response instanceof \Illuminate\Http\Response &&
            str_contains($response->headers->get('Content-Type'), 'text/html')) {

            $content = $response->getContent();

            // استبدال <sr></sr> المحوّلة من Blade بـ HTML فعلي
            $content = str_replace(
                ['&lt;sr&gt;', '&lt;/sr&gt;'],
                ['<sr>', '</sr>'],
                $content
            );

            $response->setContent($content);
        }

        return $response;
    }
}
