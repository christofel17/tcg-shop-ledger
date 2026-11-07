# Commit Convention

Follow [Conventional Commits](https://www.conventionalcommits.org/).

## Format

```
<type>[optional scope]: <summary>

[optional body]
```

## Rules

- **Summary line:** at most 50 characters.
- **Body:** wraps at 72 characters. Include only when the *why* isn't obvious from the diff. Explain the reasoning and the alternative you rejected — not what the code does.
- **Breaking changes:** append `!` to the type/scope, or add a `BREAKING CHANGE:` footer.

## Example

```
feat(api): add OAuth2 login provider

The legacy session-based auth doesn't support mobile clients. Considered
extending the existing middleware, but it couples auth to cookie storage
which won't work for token-based mobile auth.
```

## Types

- `feat` — new feature
- `fix` — bug fix
- `docs` — documentation only
- `style` — formatting, no code change
- `refactor` — neither bug fix nor feature
- `perf` — performance improvement
- `test` — adding or correcting tests
- `chore` — build process, auxiliary tools
- `ci` — CI configuration
- `build` — build system or external dependencies
