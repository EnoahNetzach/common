<?php

declare(strict_types=1);

/**
 * This code was auto-generated by {this script}[https://github.com/cucumber/common/blob/main/messages/jsonschema/scripts/codegen.rb]
 */

namespace Cucumber\Messages\TestStepResult;

enum Status : string
{
  case UNKNOWN = 'UNKNOWN';
  case PASSED = 'PASSED';
  case SKIPPED = 'SKIPPED';
  case PENDING = 'PENDING';
  case UNDEFINED = 'UNDEFINED';
  case AMBIGUOUS = 'AMBIGUOUS';
  case FAILED = 'FAILED';
}
