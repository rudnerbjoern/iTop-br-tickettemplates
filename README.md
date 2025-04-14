# iTop-br-tickettemplates

Copyright (c) 2025 Björn Rudner
[![License](https://img.shields.io/github/license/rudnerbjoern/iTop-br-tickettemplates)](https://github.com/rudnerbjoern/iTop-br-tickettemplates/blob/main/LICENSE)

A lightweight iTop extension that provides customizable default values for various ticket types - especially useful to streamline your Change Management processes.

---

## 💡 What does it do?

This module modifies the default behavior of ticket creation in iTop. It allows you to prefill specific fields depending on the ticket class (e.g., RoutineChange, NormalChange, EmergencyChange) based on your configuration.

### 🎫 Ticket

- `caller_id`: Extended filtering - includes persons from sub-organizations, not just the current organization.

### 🔧 Change (Generic)

- Default value for `org_id`
- Default value for `description`
  (can be overridden by child classes)

### 🔄 RoutineChange

- Default `description` (inherits from Change or overridden)
- Default values for the **"Assign"** stage:
  - `supervisor_group_id`
  - `supervisor_id`
  - `manager_group_id`
  - `manager_id`

### ⚙️ NormalChange

- Default `description` (inherits or overridden)
- Default values for the **"Validate"** stage:
  - `supervisor_group_id`
  - `manager_group_id`
  - `acceptance_date` (prefilled with current date/time)
- Default values for the **"Assign"** stage:
  - `supervisor_id`
  - `manager_id`
- Default values for the **"Approve"** stage:
  - `approval_date`

### 🚨 EmergencyChange

- Default `description` (inherits or overridden)
- Default values for the **"Assign"** stage:
  - `supervisor_group_id`
  - `supervisor_id`
  - `manager_group_id`
  - `manager_id`
- Default values for the **"Approve"** stage:
  - `approval_date`

---

## 📦 Dependencies

The following iTop modules must be installed and enabled during setup:

- `itop-change-mgmt-itil`
- `itop-request-mgmt-itil`
- `itop-incident-mgmt-itil`

---

## 🚀 Installation

1. Copy the extension into the `extensions/` directory of your iTop instance.
2. Run the iTop setup again.
3. Make sure to **enable the extension** during the setup wizard.

---

## ⚙️ Configuration

You can customize default values via your iTop configuration file (`config-itop.php`). Example:

```php
$MyModuleSettings = array(
    'br-tickettemplates' => array(
        'ticket_defaults' => array(
            'org_id' => '2',
        ),
        'change_defaults' => array(
            'org_id' => '2',
            'description' => '<p>Default Change Template 1...</p><p>Template 2...</p>',
            'supervisor_group_id' => '10',
            'supervisor_id' => '25',
            'manager_group_id' => '11',
            'manager_id' => '26',
            'routine_change' => array(
                'description' => '<p>Routine Change Template 1...</p>',
            ),
            'normal_change' => array(
                'description' => '<p>Normal Change Template 1...</p>',
            ),
            'emergency_change' => array(
                'description' => '<p>Emergency Change Template 1...</p>',
                'supervisor_group_id' => '51',
                'supervisor_id' => '33',
                'manager_group_id' => '54',
                'manager_id' => '34',
            ),
        ),
    ),
);
```

## ✅ iTop Compatibility

This extension is compatible with iTop 3.2 and above.

Tested successfully on iTop 3.2.1.
