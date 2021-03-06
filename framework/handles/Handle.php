<?php
/********************************************
 *                Easy PHP                  *
 *                                          *
 * A lightweight PHP framework for studying *
 *                                          *
 *                 TIERGB                   *
 *      <https://github.com/TIGERB>         *
 *                                          *
 ********************************************/

namespace Framework\Handles;

use Framework\App;

Interface Handle
{
  /**
   * 注册处理机制
   *
   * @author TIERGB <https://github.com/TIGERB>
   * @return mixed
   */
  public function register(App $app);
}
