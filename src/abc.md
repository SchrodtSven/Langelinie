```mermaid
sequenceDiagram
    Alice->>Bob: Hello John, how are you?
    alt is sick
        Bob->>Alice: Not so good :(
    else is well
        Bob->>Alice: Feeling fresh like a daisy
    end
    opt Extra response
        Bob->>Alice: Thanks for asking
    end
    Computer->>Bob: Foo bar
```