<?php

namespace BudapestBar\Component\HttpKernel;

/**
 * Contains all events thrown in the HttpKernel component
 *
 * @api
 */
final class KernelEvents
{
    /**
     * The REQUEST event occurs at the very beginning of request
     * dispatching
     *
     * This event allows you to create a response for a request before any
     * other code in the framework is executed. The event listener method
     * receives a BudapestBar\Component\HttpKernel\Event\GetResponseEvent
     * instance.
     *
     * @var string
     *
     * @api
     */
    const REQUEST = 'kernel.request';

    /**
     * The EXCEPTION event occurs when an uncaught exception appears
     *
     * This event allows you to create a response for a thrown exception or
     * to modify the thrown exception. The event listener method receives
     * a BudapestBar\Component\HttpKernel\Event\GetResponseForExceptionEvent
     * instance.
     *
     * @var string
     *
     * @api
     */
    const EXCEPTION = 'kernel.exception';

    /**
     * The VIEW event occurs when the return value of a controller
     * is not a Response instance
     *
     * This event allows you to create a response for the return value of the
     * controller. The event listener method receives a
     * BudapestBar\Component\HttpKernel\Event\GetResponseForControllerResultEvent
     * instance.
     *
     * @var string
     *
     * @api
     */
    const VIEW = 'kernel.view';

    /**
     * The CONTROLLER event occurs once a controller was found for
     * handling a request
     *
     * This event allows you to change the controller that will handle the
     * request. The event listener method receives a
     * BudapestBar\Component\HttpKernel\Event\FilterControllerEvent instance.
     *
     * @var string
     *
     * @api
     */
    const CONTROLLER = 'kernel.controller';

    /**
     * The RESPONSE event occurs once a response was created for
     * replying to a request
     *
     * This event allows you to modify or replace the response that will be
     * replied. The event listener method receives a
     * BudapestBar\Component\HttpKernel\Event\FilterResponseEvent instance.
     *
     * @var string
     *
     * @api
     */
    const RESPONSE = 'kernel.response';

    /**
     * The TERMINATE event occurs once a response was sent
     *
     * This event allows you to run expensive post-response jobs.
     * The event listener method receives a
     * BudapestBar\Component\HttpKernel\Event\PostResponseEvent instance.
     *
     * @var string
     */
    const TERMINATE = 'kernel.terminate';

    /**
     * The REQUEST_FINISHED event occurs when a response was generated for a request.
     *
     * This event allows you to reset the global and environmental state of
     * the application, when it was changed during the request.
     *
     * @var string
     */
    const FINISH_REQUEST = 'kernel.finish_request';
}
