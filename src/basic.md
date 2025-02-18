```mermaid
---
config:
    look: handDrawn
---
graph LR
    A1[ShowCart] -->|Inventory| B1(Calculate)
    B1 --> C1{Persist}
    C1 -->|distribute| D1[Baz]
    C1 -->|distribute| E1[Bar]
    C1 -->|distribute| F1[Foo]
```